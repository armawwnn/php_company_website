<?php
include_once "../config.php";
AdminIsSet('../login.php');
include_once "../partials/_head.php";
$id=$_GET['id'];
$item=selectparalaxid($id);
?>



<!--make admin-->
<section class="container-fluid admin p-0">
    <!--    menu-->
    <?php include_once "../partials/_menu.php"; ?>
    <!--    end menu-->
    <section class="container">
        <section class="row ml-0 mr-0 pt-8">
            <section class="col-8 offset-2 ">
                <form action="<?php echo URL;?>administrator/admin/parallax/update.php" method="post" enctype="multipart/form-data">
                    <section class="form-group">
                        <label for="title">title_parallax</label>
                        <input type="text" name="title_parallax" id="title" class="form-control" value="<?php echo $item['title_parallax']; ?>" >
                    </section>
                    <section class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" id="description" class="form-control textarea"><?php echo $item['description'];?></textarea>
                    </section>
                    <section class="form-group">
                        <label for="image">image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </section>
                    <img src=" <?php echo URL ?>administrator/admin/image/parallax/<?php echo $item['image']?>" width="50px" height="50px">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                    <section class="form-group">
                        <input type="submit" value="submit" class="btn btn-success btn-block">
                    </section>
                </form>
                <a href="<?php echo URL;?>administrator/admin/show_parallax.php" class="btn btn-info btn-block">Show details</a>
            </section>
        </section>
    </section>
</section>
<!--end make admin-->

<?php include_once "../partials/_footer.php"?>
