$(document).ready(function() {
    // Load total no.of items added in the cart and display in the 
    load_cart_item_number();
    function load_cart_item_number() {
        $.ajax({
        url: 'cart_action.php',
        method: 'get',
            data: {
            cartItem: "cart_item"
        },
        success: function(response) {
        $("#cart-item").html(response);
    }
    });
    }
});