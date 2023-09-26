function changeMainImage(clickedImage) {
    // Lấy đường dẫn của ảnh khi người dùng click
    var newImageSrc = clickedImage.src;
        
    // Lấy phần tử chứa ảnh chính
    var mainImage = document.getElementById("mainImage");
        
    // Thay đổi đường dẫn của ảnh chính
    mainImage.src = newImageSrc;
}
