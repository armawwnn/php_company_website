<?php
include_once "../config.php";
AdminIsSet('../login.php');
include_once "../partials/_head.php";
$query=selectgallery();
?>



<!--make admin-->
<section class="container-fluid admin p-0">
    <!--    menu-->
    <?php include_once "../partials/_menu.php"; ?>
    <!--    end menu-->
    <section class="container">
        <section class="row ml-0 mr-0 pt-8">
            <section class="col-10 offset-1">
                <table class="table table-dark table-hover">
                    <tr>
                        <td>Caption</td>
                        <td>image</td>
                        <td>delete</td>
                        <td>update</td>
                    </tr>
                    <?php  foreach ($query as $item): ?>
                        <tr>
                            <td><?php echo substr($item['caption'],0,50); ?></td>
                            <td><img src="<?php echo URL?>administrator/admin/image/gallery/<?php echo $item['image']?>" width="50px" height="50px" alt=""></td>
                            <td>
                                <form action="<?php echo URL;?>administrator/admin/gallery/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php  echo $item['id'];?>">
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </form>
                            </td>
                            <td>
                                <a href="<?php echo URL ?>administrator/admin/edit_gallery.php?id=<?php echo $item['id'];?>" class="btn btn-success">Update</a>
                            </td>
                        </tr>
                    <?php  endforeach;?>
                </table>
                <a href="<?php echo URL;?>/administrator/admin/create_gallery.php" class="btn btn-success btn-block">create_gallery</a>
            </section>
        </section>
    </section>
</section>
<!--end make admin-->


<?php include_once "../partials/_footer.php"?>

