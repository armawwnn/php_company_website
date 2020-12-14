<?php
include_once "../config.php";
AdminIsSet("../login.php");
include_once ("../partials/_head.php");
$id=intval($_GET['id']);
$gallery=selectgallerybyid($id);
?>




<!--make admin-->
<section class="container-fluid admin p-0">
    <!--    menu-->
    <?php include_once "../partials/_menu.php"; ?>
    <!--    end menu-->
    <section class="container">
        <section class="row ml-0 mr-0 pt-8">
            <section class="col-8 offset-2 ">
                <form action="gallery/update.php" method="post" enctype="multipart/form-data">
                    <section class="form-group">
                        <label for="caption">caption</label>
                        <textarea name="caption" id="caption" class="form-control textarea" placeholder="plz enter caption"><?php echo $gallery['caption'] ?></textarea>
                    </section>
                    <section class="form-group">
                        <label for="image">image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </section>
                    <img src="<?php echo URL ?>administrator/admin/image/gallery/<?php echo $gallery['image']; ?>" width="50px" height="50px">
                    <input type="hidden" name="id" value="<?php echo $gallery['id']?>">
                    <section class="form-group">
                        <input type="submit" value="submit" class="btn btn-success btn-block">
                    </section>
                </form>
                <a href="<?php echo URL;?>/administrator/admin/show_gallery.php" class="btn btn-info btn-block">Show details</a>
            </section>
        </section>
    </section>
</section>
<!--end make admin-->



<?php
include_once "../partials/_footer.php";
?>
