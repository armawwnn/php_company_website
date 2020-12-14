<?php
include_once "../config.php";
AdminIsSet('../login.php');
include_once "../partials/_head.php";
$query=selectsocial();
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
                        <td>whatsapp</td>
                        <td>telegram</td>
                        <td>instagram</td>
                        <td>facebook</td>
                        <td>delete</td>
                    </tr>
                    <?php  foreach ($query as $item): ?>
                        <tr>
                            <td><?php echo $item['whatsapp']?></td>
                            <td><?php echo $item['telegram']?></td>
                            <td><?php echo $item['instagram']?></td>
                            <td><?php echo $item['facebook']?></td>
                            <td>
                                <form action="<?php echo URL;?>administrator/admin/social/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php  echo $item['id'];?>">
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    <?php  endforeach;?>
                </table>
                <a href="<?php echo URL;?>/administrator/admin/create_social.php" class="btn btn-success btn-block">create_social</a>
            </section>
        </section>
    </section>
</section>
<!--end make admin-->


<?php include_once "../partials/_footer.php"?>
