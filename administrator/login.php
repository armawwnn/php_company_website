<?php
    session_start();
    include_once "config.php";
    include_once "partials /_head.php";
    $con= ConnectDataBase();
    $query=selectAdmin();
    if (empty(mysqli_fetch_assoc($query))){
        $username="jinjer";
        $password="arman123";
        $security_password=sha1($password);
        insertAdmin($username,$security_password,1);

        if(isset($_SESSION['admin'])){
            Webheader('admin/admin.php');
        }

    }
?>
<!--logn Form-->
<section class="container-fluid">
    <section class="wrong">
        <section class="row ml-0 mr-0 mt-3">
         <?php if (isset($_SESSION['wrong'])):  // is set? ?>
            <section class="col-6 offset-3 pt-3 alert alert-danger">
                <h3 class="text-center"><?php echo $_SESSION['wrong']; ?></h3>
            </section>
         <?php endif; ?>
        </section>
    <section class="row ml-0 mr-0 mt-3">
        </section>
    </section>
    <section class="login">
        <form action="check.php" method="post">
            <section class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" placeholder="plz enter username" class="form-control" id="username">
            </section>
            <section class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" placeholder="plz enter pass" class="form-control" id="password">
            </section>
            <section class="form-group mt-3  ">
                <input type="submit" value="login" class="btn btn-success btn-block">
            </section>
        </form>
    </section>
</section>
<!--end login Form-->
<?php include_once "partials/_footer.php";?>