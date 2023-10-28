var listItems = document.querySelectorAll(".main_category_  li");
listItems.forEach(function(item) {
    item.addEventListener("click", function() {
        // Loại bỏ class "orangeText" khỏi tất cả các mục
        listItems.forEach(function(item) {
            item.classList.remove("orangeText");
        });
        // Thêm class "orangeText" vào mục được nhấp
        this.classList.add("orangeText");
    });
});

// lấy giữ liệu lọc
var data = document.querySelectorAll(".main_category_ li");

data.forEach(function(item) {
    item.addEventListener("click", function() {
        console.log(this.textContent);
        if(this.textContent == "Limited Edition"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(0) == 'L') {
                    item.style.display =  "block";
                }
                if(item.id.charAt(0) != 'L'){
                    item.style.display = "none";
                }
            });

        }else if(this.textContent == "Sale off"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(0) == 'S') {
                    item.style.display =  "block";
                }
                if(item.id.charAt(0) != 'S'){ 
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "New Arrival"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(0) == 'N') {
                    item.style.display = "block";
                }
                if(item.id.charAt(0) != 'N'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Low Top"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(2) == 'L') {
                    item.style.display = "block";
                }
                if(item.id.charAt(2) != 'L'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "High Top"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(2) == 'H') {
                    item.style.display = "block";
                }
                if(item.id.charAt(2) != 'H'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Mule"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(2) == 'M') {
                    item.style.display = "block";
                }
                if(item.id.charAt(2) != 'M'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Batas"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(5) == 'B') {
                    item.style.display = "block";
                }
                if(item.id.charAt(5) != 'B'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Urbas"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(5) == 'U') {
                    item.style.display = "block";
                }
                if(item.id.charAt(5) != 'U'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Vintas"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(5) == 'V') {
                    item.style.display = "block";
                }
                if(item.id.charAt(5) != 'V'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Canvas"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(6) == 'C' && item.id.charAt(7) == 'V') {
                    item.style.display = "block";
                }
                if(item.id.charAt(6) != 'C' && item.id.charAt(7) != 'V'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Cottons"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(6) == 'C' && item.id.charAt(7) == 'T') {
                    item.style.display = "block";
                }
                if(item.id.charAt(6) != 'C' && item.id.charAt(7) != 'T'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Polyester"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(6) == 'P' && item.id.charAt(7) == 'T') {
                    item.style.display = "block";
                }
                if(item.id.charAt(6) != 'P' && item.id.charAt(7) != 'T'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "Unisex"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(4) == 'U') {
                    item.style.display = "block";
                }
                if(item.id.charAt(4) != 'U'){
                    item.style.display = "none";
                }
            });
        }else if(this.textContent == "500K - 599K"){
            var product_ID = document.querySelectorAll(".product_content_item .product_content_item_inf p:last-child");
        
            product_ID.forEach(function(item){
                var price = parseInt(item.textContent.replace('.','').replace(' VND',''));
                if(price >= 500000 && price <= 599000) {
                    item.parentElement.parentElement.style.display = "block";
                } else {
                    item.parentElement.parentElement.style.display = "none";
                    }
            });
        }else if(this.textContent == "600K - 699K"){
            var product_ID = document.querySelectorAll(".product_content_item .product_content_item_inf p:last-child");
        
            product_ID.forEach(function(item){
                var price = parseInt(item.textContent.replace('.','').replace(' VND',''));
                if(price >= 600000 && price <= 699000) {
                    item.parentElement.parentElement.style.display = "block";
                } else {
                    item.parentElement.parentElement.style.display = "none";
                    }
            });
        }else if(this.textContent == "700K - 799K"){
            var product_ID = document.querySelectorAll(".product_content_item .product_content_item_inf p:last-child");
        
            product_ID.forEach(function(item){
                var price = parseInt(item.textContent.replace('.','').replace(' VND',''));
                if(price >= 700000 && price <= 799000) {
                    item.parentElement.parentElement.style.display = "block";
                } else {
                    item.parentElement.parentElement.style.display = "none";
                    }
            });
        }else if(this.textContent == "> 800K"){
            var product_ID = document.querySelectorAll(".product_content_item .product_content_item_inf p:last-child");
        
            product_ID.forEach(function(item){
                var price = parseInt(item.textContent.replace(/\./g,'').replace(' VND',''));
                if(price >= 800000) {
                    item.parentElement.parentElement.style.display = "block";
                } else {
                    item.parentElement.parentElement.style.display = "none";
                    }
            });
        }
    })
});

// Nam nữ 

var sex = document.querySelectorAll(".main_category_1 li h1");

sex.forEach(function(item) {
    item.addEventListener("click", function() {
        console.log(this.textContent);
        if(this.textContent == "NAM"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(4) == 'M') {
                    item.style.display =  "block";
                }
                if(item.id.charAt(4) != 'M'){
                    item.style.display = "none";
                }
            });

        }else if(this.textContent == "NỮ"){
            var product_ID = document.querySelectorAll(".product_content_item")

            product_ID.forEach(function(item){
                if(item.id.charAt(4) == 'N') {
                    item.style.display =  "block";
                }
                if(item.id.charAt(4) != 'N'){
                    item.style.display = "none";
                }
            });
        }
    });
});