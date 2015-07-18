//js doc

//------------- UItoTop --------------//

$().UItoTop({easingType: 'easeOutQuart'});

/* ------------- second navbar scroling effect--------------------*/

$('.navbar-inverse').addClass("animated fadeIn");


$(window).scroll(function() {//on the scroll

    var windowpos = $(window).scrollTop();//position on the scroll

    if (windowpos >= 0) {//if position >= 60px from the top

        $(".navbar-default").addClass("animated fadeInDown");

        window.setTimeout( function(){
            $(".navbar-default").removeClass('animated fadeInDown');
               }, 1000);

    }

});


//------------------ animate.css --------------------//

/* ---------animate on hover ----------*/

function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 500);
        }
    );
};

$('.h1-home').addClass('animated bounceInRight');


/* bouncing of product title */
$('.product_cart,.categories').on('mouseenter',function(){

    $(this).find('.title').addClass('animated bounceIn' );

    window.setTimeout( function(){
        $('.title').removeClass('animated bounceIn');
    }, 300);

});

/* ----------------  modal with first message ---------------------*/

if(!sessionStorage.was_here){

    $('#modalFirst').modal('show');
    sessionStorage.was_here=true;
}

// ---------- tooltips ------------//

$('[data-toggle="tooltip"]').tooltip();


//-----------------tabs on edit account------------------//

//http://stackoverflow.com/questions/18999501/bootstrap-3-keep-selected-tab-on-page-refresh
$('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
   $('.message-success,.error-display').html('');
});

// store the currently selected tab in the hash value
$("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
    var id = $(e.target).attr("href").substr(1);
    window.location.hash = id;
    $('.message,.error-display').html('');
});

// on load of the page: switch to the currently selected tab
var hash = window.location.hash;
$('#myTab a[href="' + hash + '"]').tab('show');

//Modal on delete account action
$("#del1").on("click", function () {

    if ($("input[name=check4]:checked").val()) {

        $("#myModal1").modal('show');
        $(".alert").alert().hide();

    } else {
        $(".alert").alert().show();
        //alert("Confirm the action!")
    }
});

/*    ----   change color of cart total-number on hover  ---- */

$('.li-cart').on('mouseenter',
    function () {
        $('.li-cart>span').css('color', '#2A2E2D')
    }
);
$('.li-cart').on('mouseleave',
    function () {
        $('.li-cart>span').css('color', '#dcdcdc')
    }
);

/*   ----   show search field ----  */

$('.search').hide();
$('.btn-search2').on('click', function () {
    $('.search').slideToggle();
});


//-----------------buttons Add to cart------------------//

$('.add-to-cart').on('click', function () {

    var product_id = $(this).data('id');
    //console.log(product_id);

    $.ajax({
        url: CI_ROOT + "cart/addToCart",
        method: "GET",
        dataType: "html",
        data: {id: product_id},
        success: function (data) {
            //location.reload();
            if(data=='You already have this item in the cart'){
               console.log(data);
                var elem=$('[data-id='+product_id+'].add-to-cart');
                elem.attr({
                    'data-toggle':"popover",
                    'data-container':"body",
                    'data-placement':"bottom",
                    'data-content':data
                });
                elem.popover('show');
                setTimeout(function(){
                    elem.popover('hide');
                },2000);

            }else{

                $('.cart_count').html(data);
            }
        }
    });

});

/* buy now button */

$('.buy-now').on('click', function () {

    var product_id = $(this).data('id');

    $.ajax({
        url: CI_ROOT + "cart/addToCart",
        method: "GET",
        dataType: "html",
        data: {id: product_id},
        success: function (data) {
            location.replace(CI_ROOT + 'cart/checkout');
        }
    });

});

/* ----- empty cart ----- */

$(".delete-all").on("click", function () {
    $.get(CI_ROOT + "cart/empty_cart", function () {
        location.reload();
    });
});


/* ----- buttons + and - in checkout ------ */

$(".input-group>.input-group-btn").on('click', function () {

    var op = $(this).data('op');

    var amount;

    if (op == 'up') {
        amount = parseInt($(this).prev().val());//prev()-value of previus field -input, parseInt()--adding of value and not chaining--->this line collect previus value
        amount++;
        $(this).prev().val(amount);//show new value
    } else {
        amount = parseInt($(this).next().val());//next()-value of previus field -input,
        amount--;
        $(this).next().val(amount);
    }

    $('#checkout-form').submit();
});

//     ---- change on input ---- //

$(".input-group>.input-amount").on('change', function () {

    $('#checkout-form').submit();

});

//    ------ Delete Button -----  //

$('.delete-item').on('click', function () {

    var rowid = $(this).data('rowid');
    //alert(rowid);

    $.ajax({
        url: CI_ROOT + "cart/removeItem",
        method: "GET",
        dataType: "html",
        data: {rowid: rowid},
        success: function (data) {
            location.reload();
        }
    });


});








