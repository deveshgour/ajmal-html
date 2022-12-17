<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- popper js -->
<script type="text/javascript" src="js/popper.min.js"></script>

<!-- bootsrtrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    //add and remove class in header on scroll to make header small
    $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
        $("#userHeader").addClass("smallHeader");
        $("body").addClass("stickyHeader");
    } else {
        $("#userHeader").removeClass("smallHeader");
        $("body").removeClass("stickyHeader");
    }
});

$('.footerTop_form .form-control').focus(function(){
   if($(this).val() != ''){
        $(this).addClass('form-control-filled');
   }else{
        $(this).removeClass('form-control-filled');
   }
})

$('.footerTop_form .form-control').keyup(function(){
   if($(this).val() != ''){
        $(this).addClass('form-control-filled');
   }else{
        $(this).removeClass('form-control-filled');
   }
})


// country menu js
$('.country-menu a').click(function(){
     $('body').toggleClass('openCountryMenu');
     $('body').css('overflow','hidden')
})

$('.countryMenu_close, .customOverlay').click(function(){
     $('body').removeClass('openCountryMenu');
     $('body').css('overflow','auto')
});


// cart menu js
$('.cart-menu a').click(function(){
     $('body').toggleClass('openCartMenu');
     $('body').css('overflow','hidden')
})

$('.cartMenu_close, .customOverlay').click(function(){
     $('body').removeClass('openCartMenu');
     $('body').css('overflow','auto')
})

function cartBodyHeight(){
     $('.cartMenu_body').css('max-height', $(window).outerHeight() - ($('.cartMenu_header').outerHeight() + $('.cartMenu_footer').outerHeight()));
}
cartBodyHeight();

$(window).resize(function(){
     cartBodyHeight(); 
})

AOS.init();

$('.productLike').click(function(){
     $(this).find('em').toggleClass('icon-favorite');
     $(this).find('em').toggleClass('icon-favorite_outline');
})

$('#searchItems').click(function(){
     $('#navigationBar').toggleClass('newBarHide');
     $('.searchBarMenu').css({'display':'block', "height": "100%"});
     $('body').css('overflow','hidden');
})
$('.searchMenuClose').click(function(){
     $('#navigationBar').toggleClass('newBarHide');
     $('.searchBarMenu').css({'display':'none', "height": "0"})
     $('body').css('overflow','auto')
})

</script>