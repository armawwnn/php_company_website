<?php
    include_once "../config.php";
    AdminIsSet('../login.php');
    include_once "../partials/_head.php"
    ?>



<!--make admin-->
<section class="container-fluid admin p-0">
<!--    menu-->
<?php include_once "../partials/_menu.php"; ?>
<!--    end menu-->
    <section class="container">
        <section class="row ml-0 mr-0 pt-8">
            <section class="col-8 offset-2 ">
                <form action="seo/insert.php" method="post" enctype="multipart/form-data">
                    <section class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="plz enter the title of website.">
                    </section>
                    <section class="form-group">
                        <label for="author">author</label>
                        <input type="text" name="author" id="author" class="form-control" placeholder="plz enter the name  of  author website.">
                    </section>
                    <section class="form-group">
                        <label for="keywords">keywords</label>
                        <textarea name="keywords" id="keywords" class="form-control textarea" placeholder="plz enter keywords"></textarea>
                    </section>
                    <section class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" id="description" class="form-control textarea" placeholder="plz enter description"></textarea>
                    </section>
                    <section class="form-group">
                        <label for="image">image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </section>
                    <section class="form-group">
                        <input type="submit" value="submit" class="btn btn-success btn-block">
                    </section>
                </form>
                <a href="<?php echo URL;?>/administrator/admin/show_seo.php" class="btn btn-info btn-block">Show details</a>
            </section>
        </section>
    </section>
</section>
<!--end make admin-->

<?php include_once "../partials/_footer.php"?>
