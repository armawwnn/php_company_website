<?php
include_once "../config.php";
AdminIsSet("../login.php");
include_once ("../partials/_head.php");
?>




<!--make admin-->
<section class="container-fluid admin p-0">
    <!--    menu-->
    <?php include_once "../partials/_menu.php"; ?>
    <!--    end menu-->
    <section class="container">
        <section class="row ml-0 mr-0 pt-8">
            <section class="col-8 offset-2 ">
                <form action="social/insert.php" method="post" >
                    <section class="form-group">
                        <label for="whatsapp">whatsapp</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="WP">
                    </section>
                    <section class="form-group">
                        <label for="telegram">telegram</label>
                        <input type="text" name="telegram" id="telegram" class="form-control" placeholder="TELE">
                    </section>
                    <section class="form-group">
                        <label for="instagram">instagram</label>
                        <input type="text" name="instagram" id="instagram" class="form-control" placeholder="INSTA">
                    </section>
                    <section class="form-group">
                        <label for="facebook">facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="FB">
                    </section>
                    <section class="form-group">
                        <input type="submit" value="submit" class="btn btn-success btn-block">
                    </section>
                </form>
                <a href="<?php echo URL;?>/administrator/admin/show_sociaal.php" class="btn btn-info btn-block">Show details</a>
            </section>
        </section>
    </section>
</section>
<!--end make admin-->



<?php
include_once "../partials/_footer.php";
?>
