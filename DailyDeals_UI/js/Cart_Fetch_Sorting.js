$(document).ready(function() {
    const $productList = $('#product-list');
    const $productContainer = $('#product-container');

    // Hide the product-list div
    $productContainer.hide();

    $('#category-list').on('click', 'a', function(event) {
        event.preventDefault();
        const category = $(this).data('category');
        loadProducts(category);
    });

    function loadProducts(category) {
        $.ajax({
            url: 'fetch_products_Sorting.php',
            type: 'GET',
            data: { category: category },
            success: function(response) {
                $productContainer.html(response);
                // Optional: if you want to show product-container and hide product-list explicitly
                $productList.show();
                $ProductContainer.hide();
            },
            error: function() {
                console.error("Error loading products.");
            }
        });
    }

    // Load all products on initial page load
    loadProducts('all');
});
