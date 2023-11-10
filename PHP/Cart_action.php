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
	  $fullName = $_POST['fullName'];
	  $email = $_POST['email'];
	  $phoneNumber = $_POST['phoneNumber'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];
	  $user_id = $_POST['user_id'];

	  $data = '';

	  $stmt = $connect->prepare('INSERT INTO orders (user_id, fullName,email,phoneNumber,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?,?,?)');
	  $stmt->bind_param('sssssssi',$user_id,$name,$email,$phone,$address,$pmode,$products,$grand_total);
	  $stmt->execute();
	  $stmt2 = $connect->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h2>Đặt hàng thành công!</h2>
								<h4>Sản phẩm : ' . $products . '</h4>
								<h4>Khách hàng : ' . $fullName . '</h4>
								<h4>Địa chỉ email : ' . $email . '</h4>
								<h4>Số điện thoại : ' . $phoneNumber . '</h4>
								<h4>Tổng hóa đơn : ' . number_format($grand_total,2) . '</h4>
								<h4>Phương thức thanh toán : ';
								if ($pmode === "cod") {
									$data .= "Thanh toán tiền mặt khi nhận hàng";
								} elseif ($pmode === "netbanking") {
									$data .= "Chuyển khoản";
								} else {
									$data .= "Thẻ tín dụng";
								}
								$data .='</h4>
								<h3>Cảm ơn bạn đã chọn FOOTSTEP IN FASHION giữa nhiều nhãn hàng khác.</h3>
								<h4>Nếu gặp vấn đề trong lúc giao, nhận hàng hãy liên hệ theo số điện thoại: 0961516674 để được hỗ trợ.</h4>
						  </div>';
	  echo $data;
	}
?>