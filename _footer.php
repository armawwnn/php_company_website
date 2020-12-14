
<!--footer part-->



<!--js-->
<script src="<?php echo URL?>dist/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
<script src="<?php echo URL?>dist/bootstrap/js/popper.min.js"></script>
<script src="<?php echo URL?>dist/bootstrap/js/bootstrap.min.js"></script>
<!--lightbox-->
<script src="<?php echo URL?>dist/lightbox/js/lightbox-plus-jquery.min.js"></script>
<!--toastar-->
<script src="<?php echo URL?>dist/toastar/toastr.min.js"></script>
<!--ajax-->
<script>
    $("#contact").submit(function (e){
        e.preventDefault();
        var fullname=$("#fullname").val();
        var email=$("#email").val();
        var comment=$("#comment").val();
        var url=$('#contact').attr('action');
        $.ajax({
            url:url,
            type:'post',
            data:{fullname:fullname,email:email,comment:comment}
        }).done (function (data){
            if (data==1){
                toastr.success('عملیات با موفقیت انجام شد . ');
                $("#fullname").val('');
                $("#email").val('');
                $("#comment").val('');
            }else {
                toastr.error('دوباره تلاش کنید ! ');
            }
        })
    })
</script>
</body>
</html>