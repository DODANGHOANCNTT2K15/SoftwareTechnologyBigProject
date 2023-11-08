$(document).ready(function() {
    $(".main_category .main_category_ h1").click(function() {
        $('.main_category .main_category_ ul').toggleClass('active');
    });

    //filter on any checkbox is checked
    $(".product-check").click(function() {
        filter_product();
    });
    
    //filter_product() function filters product in each checkbox click or price range slide
    function filter_product() {
        var action = "filterRequest";
        var product_state = get_filtered_product('product_state');
        var product_design = get_filtered_product('product_design');
        var product_type = get_filtered_product('product_type');
        var product_price = get_filtered_product('product_price');
        var product_material = get_filtered_product('product_material');
        var product_color = get_filtered_product('product_color');

        $.ajax({
            url: "filter.php",
            method: "post",
            data: {
                action: action,
                product_state: product_state,
                product_design: product_design,
                product_type: product_type,
                product_price: product_price,
                product_material: product_material,
                product_color: product_color
            },
            success: function(response) {
                $("#result").html(response);
            }
        });
    }

    //whenever a checkbox is checked from a particular filter option say brand, 
    //we will have a fresh list of brands for which product should be filtered
    function get_filtered_product(filter_id) {
        var filtered_data = [];
        $("#" + filter_id + ":checked").each(function() {
            filtered_data.push($(this).val());
        });
        return filtered_data;
    }
});
