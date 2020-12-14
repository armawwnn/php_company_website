<?php
include_once "../config.php";
AdminIsSet('../login.php');
include_once "../partials/_head.php";
$query=selectcontact();
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
                        <td>fullname</td>
                        <td>email</td>
                        <td>comment</td>
                        <td>delete</td>
                    </tr>
                    <?php  foreach ($query as $item): ?>
                        <tr>
                            <td><?php echo $item['fullname']?></td>
                            <td><?php echo $item['email']?></td>
                            <td><?php echo substr($item['comment'],0,50)."..."; ?></td>
                            <td>
                                <form action="<?php echo URL;?>administrator/admin/contact/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php  echo $item['id'];?>">
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </form>
                            </td>
                            <td><a href="#" data-toggle="modal" data-target="#modelId-<?php echo $item['id']; ?>">show</a></td>
                            <!-- Modal -->
                            <div class="modal fade" id="modelId-<?php echo $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo $item['comment']?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    <?php  endforeach;?>
                </table>
            </section>
        </section>
    </section>
</section>



<?php include_once "../partials/_footer.php"?>