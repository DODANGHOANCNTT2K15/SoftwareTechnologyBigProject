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

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 6000);
}