<?php
include_once "../config.php";
AdminIsSet("../login.php");
include_once ("../partials/_head.php");
$id=intval($_GET['id']);
$teampro=selectbyidteampro($id);
?>




<!--make admin-->
<section class="container-fluid admin p-0">
    <!--    menu-->
    <?php include_once "../partials/_menu.php"; ?>
    <!--    end menu-->
    <section class="container">
        <section class="row ml-0 mr-0 pt-8">
            <section class="col-8 offset-2 ">
                <form action="teampro/update.php" method="post" enctype="multipart/form-data">
                    <section class="form-group">
                        <label for="title_teampro">title</label>
                        <input type="text" name="title_teampro" id="title_teampro" class="form-control"value="<?php echo $teampro['title'] ?>">
                    </section>
                    <section class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" id="description" class="form-control textarea"><?php echo $teampro['description'] ?></textarea>
                    </section>
                    <section class="form-group">
                        <label for="image">image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <img src="<?php echo URL ?>administrator/admin/image/teampro/<?php echo $teampro['image'] ?>" alt="" height="50px" width="50px">
                        <input type="hidden" name="id" value="<?php echo $teampro['id']?>">
                    </section>
                    <section class="form-group">
                        <input type="submit" value="submit" class="btn btn-success btn-block">
                    </section>
                </form>
                <a href="<?php echo URL;?>/administrator/admin/show_teampro.php" class="btn btn-info btn-block">Show details</a>
            </section>
        </section>
    </section>
</section>
<!--end make admin-->



<?php
include_once "../partials/_footer.php";
?>
