<?php
	session_start();
	require 'ConnectData.php';
	$user_id = $_SESSION["user_id"];

	// Add products
	if (isset($_POST['product_id'])) {
		$product_id = $_POST['product_id'];
		$product_price = $_POST['product_price'];
		$size = $_POST['size'];
		$quantity = $_POST['quantity'];
		$status = "Chờ thanh toán";
		$order_date = date("Y-m-d H:i:s");
		$total_price = $product_price * $quantity;
	
		$stmt = $connect->prepare('SELECT product_id FROM cart WHERE product_id=?');
		$stmt->bind_param('i', $product_id);
		$stmt->execute();
		$res = $stmt->get_result();
		$r = $res->fetch_assoc();
		$code = $r['product_id'] ?? '';
	
		if (!$code) {
			// Thêm vào giỏ hàng
			$query_1 = $connect->prepare('INSERT INTO cart (user_id, product_id, quantity, total_price, order_date, status) VALUES (?, ?, ?, ?, ?, ?)');
			$query_1->bind_param('iiiiss', $user_id, $product_id, $quantity, $total_price, $order_date, $status);
			$query_1->execute();
		} 
	} 
	
	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
		$stmt = $connect->prepare('SELECT SUM(quantity) AS total_quantity FROM cart WHERE user_id = ?');
		$stmt->bind_param('i', $user_id);
		$stmt->execute();
		$res = $stmt->get_result();
		$row = $res->fetch_assoc();
		
		$total_quantity = $row['total_quantity'];
		if ($total_quantity === null) {
			$total_quantity = 0;
		}
		echo $total_quantity;
	}

	// Remove single items from cart
	if (isset($_GET['remove'])) {
	  $id = $_GET['remove'];

	  $stmt = $connect->prepare('DELETE FROM cart WHERE product_id=?');
	  $stmt->bind_param('i',$id);
	  $stmt->execute();

	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Item removed from the cart!';
	  header('location:cart.php');
	}

	// Remove all items at once from cart
	if (isset($_GET['clear'])) {
	  $stmt = $connect->prepare('DELETE FROM cart');
	  $stmt->execute();
	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'All Item removed from the cart!';
	  header('location:cart.php');
	}

	// Set total price of the product in the cart table
	if (isset($_POST['qty'])) {
		$quantity = $_POST['qty'];
		$product_id = $_POST['pid'];
		$product_price = $_POST['pprice'];
		$total_price = $quantity * $product_price;
  
		$stmt = $connect->prepare('UPDATE cart SET quantity=?, total_price=? WHERE product_id=?');
		$stmt->bind_param('iii',$quantity,$total_price,$product_id);
		$stmt->execute();
	  }

	// Checkout and save customer info in the orders table
	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];

	  $data = '';

	  $stmt = $connect->prepare('INSERT INTO orders (name,email,phone,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?,?)');
	  $stmt->bind_param('sssssss',$name,$email,$phone,$address,$pmode,$products,$grand_total);
	  $stmt->execute();
	  $stmt2 = $connect->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $products . '</h4>
								<h4>Your Name : ' . $name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
								<h4>Your Phone : ' . $phone . '</h4>
								<h4>Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';
	  echo $data;
	}
?>