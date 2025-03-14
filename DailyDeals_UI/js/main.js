/*  ---------------------------------------------------
    Template Name: Ogani
    Description:  Ogani eCommerce  HTML Template
    Author: Colorlib
    Author URI: https://colorlib.com
    Version: 1.0
    Created: Colorlib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Gallery filter
        --------------------*/
        $('.featured__controls li').on('click', function () {
            $('.featured__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.featured__filter').length > 0) {
            var containerEl = document.querySelector('.featured__filter');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Humberger Menu
    $(".humberger__open").on('click', function () {
        $(".humberger__menu__wrapper").addClass("show__humberger__menu__wrapper");
        $(".humberger__menu__overlay").addClass("active");
        $("body").addClass("over_hid");
    });

    $(".humberger__menu__overlay").on('click', function () {
        $(".humberger__menu__wrapper").removeClass("show__humberger__menu__wrapper");
        $(".humberger__menu__overlay").removeClass("active");
        $("body").removeClass("over_hid");
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*-----------------------
        Categories Slider
    ------------------------*/
    $(".categories__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 4,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {

            0: {
                items: 1,
            },

            480: {
                items: 2,
            },

            768: {
                items: 3,
            },

            992: {
                items: 4,
            }
        }
    });


    $('.hero__categories__all').on('click', function(){
        $('.hero__categories ul').slideToggle(400);
    });

    /*--------------------------
        Latest Product Slider
    ----------------------------*/
    $(".latest-product__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*-----------------------------
        Product Discount Slider
    -------------------------------*/
    $(".product__discount__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {

            320: {
                items: 1,
            },

            480: {
                items: 2,
            },

            768: {
                items: 2,
            },

            992: {
                items: 3,
            }
        }
    });

    /*---------------------------------
        Product Details Pic Slider
    ----------------------------------*/
    $(".product__details__pic__slider").owlCarousel({
        loop: true,
        margin: 20,
        items: 4,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*-----------------------
		Price Range Slider
	------------------------ */
    var rangeSlider = $(".price-range"),
        minamount = $("#minamount"),
        maxamount = $("#maxamount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max');
    rangeSlider.slider({
        range: true,
        min: minPrice,
        max: maxPrice,
        values: [minPrice, maxPrice],
        slide: function (event, ui) {
            minamount.val('$' + ui.values[0]);
            maxamount.val('$' + ui.values[1]);
        }
    });
    minamount.val('$' + rangeSlider.slider("values", 0));
    maxamount.val('$' + rangeSlider.slider("values", 1));

    /*--------------------------
        Select
    ----------------------------*/
    $("select").niceSelect();

    /*------------------
		Single Product
	--------------------*/
    $('.product__details__pic__slider img').on('click', function () {

        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.product__details__pic__item--large').attr('src');
        if (imgurl != bigImg) {
            $('.product__details__pic__item--large').attr({
                src: imgurl
            });
        }
    });

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

})(jQuery);

//cart
$(document).ready(function() {
    let cartItems = [];
    let cartTotal = 0.00;

    function updateCart() {
        $("#cart-items").empty();
        cartTotal = 0.00;

        cartItems.forEach(function(item) {
            $("#cart-items").append(`
                <li class="cart-item">
                    <span>${item.name} - ₹${item.price.toFixed(1)} x ${item.quantity}</span>
                    <div>
                        <button class="add-quantity" data-id="${item.id}">+</button>
                        <button class="remove-item" data-id="${item.id}">-</button>
                    </div>
                </li>
            `);

            cartTotal += item.price * item.quantity;
        });

        $("#cart-total").text(cartTotal.toFixed(1));
    }

    $(".add-to-cart").on("click", function() {
        const productId = $(this).closest(".featured__item").find(".featured__item__text").data("id");
        const productName = $(this).closest(".featured__item").find(".featured__item__text").data("name");
        const productPrice = parseFloat($(this).closest(".featured__item").find(".featured__item__text").data("price"));

        const existingItem = cartItems.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cartItems.push({
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1
            });
        }

        $("#cart").show();

        updateCart();
    });

    $("#cart").on("click", ".add-quantity", function() {
        const itemId = $(this).data("id");
        const item = cartItems.find(item => item.id === itemId);

        if (item) {
            item.quantity++;
            updateCart();
        }
    });

    $("#cart").on("click", ".remove-item", function() {
        const itemId = $(this).data("id");
        const itemIndex = cartItems.findIndex(item => item.id === itemId);

        if (itemIndex !== -1) {
            if (cartItems[itemIndex].quantity > 1) {
                cartItems[itemIndex].quantity--;
            } else {
                cartItems.splice(itemIndex, 1);
            }
            updateCart();
        }
    });

    $("#cancel-cart").on("click", function() {
        cartItems = [];
        updateCart();
        $("#cart").hide();
    });

//    $("#checkout-cart").on("click", function() {
//        alert("Checkout functionality would be implemented here.");
//    });

    $("#toggle-cart").on("click", function() {
        $("#cart").toggle();
    });

    // Wishlist Section

    let wishItems = []; // Declaration of wishItems array

    function updateWishlist() { // Renamed updateCart to updateWishlist
        $("#wish-items").empty();
        cartTotal = 0.00;

        $.each(wishItems, function(index, item) {
            $("#wish-items").append(`
                <li class="wish-item">
                    <span>${item.name} - $${item.price.toFixed(1)} x ${item.quantity}</span>
                    <div>
                        <button class="add-quantity" data-id="${item.id}">+</button>
                        <button class="remove-item" data-id="${item.id}">-</button>
                    </div>
                </li>
            `);

            cartTotal += item.price * item.quantity;
        });

        $("#wish-total").text(cartTotal.toFixed(1));
    }

    $(".add-to-wish").on("click", function() {
        const product = $(this).closest(".product");
        const productId = product.data("id");
        const productName = product.data("name");
        const productPrice = parseFloat(product.data("price"));

        const existingItem = wishItems.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            wishItems.push({
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1
            });
        }

        $("#wish").show();

        updateWishlist();
    });

    $("#wish").on("click", ".add-quantity", function() {
        const itemId = $(this).data("id");
        const item = wishItems.find(item => item.id === itemId);

        if (item) {
            item.quantity++;
            updateWishlist();
        }
    });

    $("#wish").on("click", ".remove-item", function() {
        const itemId = $(this).data("id");
        const itemIndex = wishItems.findIndex(item => item.id === itemId);

        if (itemIndex !== -1) {
            wishItems.splice(itemIndex, 1);
            updateWishlist();
        }
    });

    $("#cancel-wish").on("click", function() {
        wishItems = [];
        updateWishlist();
        $("#wish").hide();
    });

    $("#checkout-wish").on("click", function() {
        alert("Checkout functionality would be implemented here.");
    });

    $("#toggle-wish").on("click", function() {
        $("#wish").toggle();
    });

    // Toggle between cart and wishlist

    $('#wish').hide();
    $('#cart').hide();

    $('#add-to-cart').click(function() {
        $('#wish').hide();
        $('#cart').toggle();
    });

    $('#cancel-wish').click(function() {
        $('#cart').hide();
        $('#wish').toggle();
    });
});


//Filter
// document.addEventListener("DOMContentLoaded", function() {
//     const radioButtons = document.querySelectorAll('input[name="brand"]');
//     const productItems = document.querySelectorAll('.product__item');

//     radioButtons.forEach(function(radioButton) {
//         radioButton.addEventListener('change', function() {
//             const selectedBrand = this.value;

//             productItems.forEach(function(item) {
//                 const dataBrand = item.getAttribute('data-brand');
//                 if (selectedBrand === dataBrand || selectedBrand === 'all') {
//                     item.style.display = 'block';
//                 } else {
//                     item.style.display = 'none';
//                 }
//             });
//         });
//     });
// });

// Wait for the DOM to be ready
$(document).ready(function() {
    // Initially show all products
    showAllProducts();

    // When a radio button is clicked
    $('input[name="brand"]').change(function() {
        // Get the selected brand
                var selectedBrand = $(this).val();

        // If "All" is selected, show all products
        if (selectedBrand === 'all') {
            showAllProducts();
        } else {
            // Otherwise, filter and show products with the selected brand
            filterProducts(selectedBrand);
        }
    });
});

// Function to show all products
function showAllProducts() {
    $('#product-list').children().show();
}

// Function to filter and show products with a specific brand
function filterProducts(brand) {
    $('#product-list').children().hide();
    $('#product-list').find('.product__item[data-brand="' + brand + '"]').show();

}


