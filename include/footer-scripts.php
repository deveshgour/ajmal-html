<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- popper js -->
<script type="text/javascript" src="js/popper.min.js"></script>

<!-- bootsrtrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>


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
</script>