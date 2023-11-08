<?php
//importing connection file
require_once 'ConnectData.php';

function formatPrice($price) {
    return number_format($price, 0, '.');
}

if (isset($_POST['action'])) {
    //sql query
    $sql = "SELECT p.product_id,
                p.product_sex,
                p.product_state,
                p.product_design,
                p.product_type,
                p.product_image,
                p.product_price,
                p.product_material,
                p.product_color,
                p.product_description,
                p.product_link
            FROM products p
            WHERE 1=1";

    //adding new price to query if changed
    // if (isset($_POST['price'])) {
    //     $lowRange = $_POST['price'] - $_POST['price'] * 1 / 4;
    //     $highRange = $_POST['price'] + $_POST['price'] * 1 / 2;
    //     $sql .= " AND (p.price >=". $lowRange ." AND p.price <= ". $highRange .")";
    // }

    //adding sex to query if checked
    if (isset($_POST['product_sex'])) {
        $product_sex = implode(",", $_POST['product_sex']);
        $sql .= " AND p.product_sex IN (". $product_sex .")";
    }

    // Adding state to query if checked
    if (isset($_POST['product_state'])) {
        $product_states = $_POST['product_state'];
        $escaped_states = array();

        // Prepare an array of escaped values
        foreach ($product_states as $state) {
            $escaped_states[] = "'" . $connect->real_escape_string($state) . "'";
        }

        $imploded_states = implode(", ", $escaped_states);
        $sql .= " AND p.product_state IN ($imploded_states)";
    }

    // Adding design to query if checked
    if (isset($_POST['product_design'])) {
        $product_designs = $_POST['product_design'];
        $escaped_designs = array();

        // Prepare an array of escaped values
        foreach ($product_designs as $design) {
            $escaped_designs[] = "'" . $connect->real_escape_string($design) . "'";
        }

        $imploded_designs = implode(", ", $escaped_designs);
        $sql .= " AND p.product_design IN ($imploded_designs)";
    }

    // Adding type to query if checked
    if (isset($_POST['product_type'])) {
        $product_types = $_POST['product_type'];
        $escaped_types = array();

        // Prepare an array of escaped values
        foreach ($product_types as $type) {
            $escaped_types[] = "'" . $connect->real_escape_string($type) . "'";
        }

        $imploded_types = implode(", ", $escaped_types);
        $sql .= " AND p.product_type IN ($imploded_types)";
    }

    // Adding price to query if checked
    if (isset($_POST['product_price'])) {
        $product_prices = $_POST['product_price'];
        $escaped_prices = array();

        // Prepare an array of escaped values
        foreach ($product_prices as $price) {
            $escaped_prices[] = "'" . $connect->real_escape_string($price) . "'";
        }

        $imploded_prices = implode(", ", $escaped_prices);
        $sql .= " AND p.product_price IN ($imploded_prices)";
    }

    // Adding material to query if checked
    if (isset($_POST['product_material'])) {
        $product_materials = $_POST['product_material'];
        $escaped_materials = array();

        // Prepare an array of escaped values
        foreach ($product_materials as $material) {
            $escaped_materials[] = "'" . $connect->real_escape_string($material) . "'";
        }

        $imploded_materials = implode(", ", $escaped_materials);
        $sql .= " AND p.product_material IN ($imploded_materials)";
    }
    // Adding color to query if checked
    if (isset($_POST['product_color'])) {
        $product_colors = $_POST['product_color'];
        $escaped_colors = array();

        // Prepare an array of escaped values
        foreach ($product_colors as $color) {
            $escaped_colors[] = "'" . $connect->real_escape_string($color) . "'";
        }

        $imploded_colors = implode(", ", $escaped_colors);
        $sql .= " AND p.product_color IN ($imploded_colors)";
    }

    $result = $connect->query($sql);
    $rows = 0;
    if($result){
        $rows = $result -> num_rows;
    }

    //output variable contains filtered broduct content 
    $output = "";
    if ($rows > 0) {
        while ($data = $result->fetch_assoc()) {
            $formattedPrice = formatPrice($data['product_price']);
            $output .= "<div class='product_content_item'>
                            <div class='product_content_item_img'>
                                <a href='../PHP/".htmlspecialchars($data['product_link'])."'><img src='../Picture/Product/".htmlspecialchars($data['product_image'])."'></a>
                            </div>
                            <div class='product_content_item_inf'>
                                <p>".htmlspecialchars($data['product_state'])."</p>
                                <h2><a href='../PHP/".htmlspecialchars($data['product_link'])."'>Pattas Tomo - Low Top</a></h2>
                                <p>".htmlspecialchars($data['product_color'])."</p>
                                <p>".htmlspecialchars($formattedPrice)." VND</p>
                            </div>
                        </div>";
        }
    } else {
        $output = '<div style="color:red;font-size:17px;">No results found</div>';
    }
    
    
    //echo back filterd product to page
    echo $output;
}
