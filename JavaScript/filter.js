var listItems = document.querySelectorAll(".main_category_  li");
    listItems.forEach(function(item) {
        item.addEventListener("click", function() {
            if (this.classList.contains("orangeText")) {
                this.classList.remove("orangeText");
            } else {
                this.classList.add("orangeText");
            }
        });
    });

// lấy giữ liệu lọc

var data = document.querySelectorAll(".main_category_ li")

data.forEach(function(item) {
    item.addEventListener("click", function() {
        console.log(this.textContent);
    });
});