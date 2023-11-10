// Thay đổi ảnh review
function changeMainImage(clickedImage) {
  var newImageSrc = clickedImage.src;
  var mainImage = document.getElementById("mainImage");
  mainImage.src = newImageSrc;
}

// // Tăng giảm số lượng sản phẩm
// const decreaseButton = document.getElementById('decrease');
// const increaseButton = document.getElementById('increase');
// const quantityInput = document.getElementById('quantity');

// decreaseButton.addEventListener('click', () => {
//   const currentValue = parseInt(quantityInput.value);
//   if (currentValue > 1) {
//       quantityInput.value = currentValue - 1;
//   }
// });

// increaseButton.addEventListener('click', () => {
//   const currentValue = parseInt(quantityInput.value);
//   quantityInput.value = currentValue + 1;
// });

// Slide
const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".second-image i");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = Array.from(carousel.children);

let isDragging = false, startX, startScrollLeft;

// Get the number of cards that can fit in the carousel at once
let cardPerView = 4;

// Insert copies of the last few cards to the beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
  carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to the end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
  carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
  btn.addEventListener("click", () => {
      carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
  });
});

const dragStart = (e) => {
  isDragging = true;
  carousel.classList.add("dragging");
  // Records the initial cursor and scroll position of the carousel
  startX = e.pageX;
  startScrollLeft = carousel.scrollLeft;
};

const dragging = (e) => {
  if (!isDragging) return;
  // Updates the scroll position of the carousel based on the cursor movement
  carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop = () => {
  isDragging = false;
  carousel.classList.remove("dragging");
};

const infiniteScroll = () => {
  // If the carousel is at the beginning, scroll to the end
  if (carousel.scrollLeft === 0) {
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
      carousel.classList.remove("no-transition");
  } else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
      // If the carousel is at the end, scroll to the beginning
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.offsetWidth;
      carousel.classList.remove("no-transition");
  }
};

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);

// Dropdown
function function_1() {
  document.getElementById("myDropdown1").classList.toggle("show1");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show1')) {
        openDropdown.classList.remove('show1');
      }
    }
  }
}
function function_2() {
  document.getElementById("myDropdown2").classList.toggle("show2");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show2')) {
        openDropdown.classList.remove('show2');
      }
    }
  }
}
function function_3() {
  document.getElementById("myDropdown3").classList.toggle("show3");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show3')) {
        openDropdown.classList.remove('show3');
      }
    }
  }
}

// Slide2 
const carousel_2 = document.querySelector(".carousel_2");
const arrowBtns_2 = document.querySelectorAll(".wrapper i");
const firstCardWidth_2 = carousel_2.querySelector(".card_2").offsetWidth;
const carousel_2Childrens = [...carousel_2.children];

let isDragging_2 = false, startX_2, startScrollLeft_2;

// Insert copies of the last few cards to the beginning of carousel_2 for infinite scrolling
carousel_2Childrens.slice(-cardPerView).reverse().forEach(card_2 => {
    carousel_2.insertAdjacentHTML("afterbegin", card_2.outerHTML);
});

// Insert copies of the first few cards to the end of carousel_2 for infinite scrolling
carousel_2Childrens.slice(0, cardPerView).forEach(card_2 => {
    carousel_2.insertAdjacentHTML("beforeend", card_2.outerHTML);
});

// Add event listeners for the arrow buttons to scroll the carousel_2 left and right
arrowBtns_2.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel_2.scrollLeft += btn.id === "left" ? -firstCardWidth_2 : firstCardWidth_2;
    });
});

const dragStart_2 = (e) => {
    isDragging_2 = true;
    carousel_2.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel_2
    startX_2 = e.pageX;
    startScrollLeft_2 = carousel_2.scrollLeft;
};

const dragging_2 = (e) => {
    if (!isDragging_2) return;
    // Updates the scroll position of the carousel_2 based on the cursor movement
    carousel_2.scrollLeft = startScrollLeft_2 - (e.pageX - startX_2);
};

const dragStop_2 = () => {
    isDragging_2 = false;
    carousel_2.classList.remove("dragging");
};

const infiniteScroll_2 = () => {
    // If the carousel_2 is at the beginning, scroll to the end
    if (carousel_2.scrollLeft === 0) {
        carousel_2.classList.add("no-transition");
        carousel_2.scrollLeft = carousel_2.scrollWidth - (2 * carousel_2.offsetWidth);
        carousel_2.classList.remove("no-transition");
    } else if (Math.ceil(carousel_2.scrollLeft) === carousel_2.scrollWidth - carousel_2.offsetWidth) {
        // If the carousel_2 is at the end, scroll to the beginning
        carousel_2.classList.add("no-transition");
        carousel_2.scrollLeft = carousel_2.offsetWidth;
        carousel_2.classList.remove("no-transition");
    }
};

carousel_2.addEventListener("mousedown", dragStart_2);
carousel_2.addEventListener("mousemove", dragging_2);
document.addEventListener("mouseup", dragStop_2);
carousel_2.addEventListener("scroll", infiniteScroll_2);

document.getElementById("pay-button").addEventListener("click", function() {
  window.location.href = "cart.php";
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