<?php
$item=latestSocial();
var_dump($item);
?>
<footer class="footer">
    <section class="row ml-0 mr-0 d-flex flex-row-reverse">
        <section class="col-6">
            <section class="row">
                <section class="col-3">
                    <a href="<?php echo $item['facebook'] ;?>" class="img-thumbnail" target="_blank" ><span class="fab fa-facebook" ></span></a>
                </section>
                <section class="col-3">
                    <a href="<?php echo $item['instagram'] ;?>"  class="img-thumbnail" target="_blank"><span class="fab fa-instagram"></span></a>
                </section>
                <section class="col-3">
                    <a href="<?php echo $item['telegram'];?>" class="img-thumbnail" target="_blank"><span class="fab fa-telegram"></span></a>
                </section>
                <section class="col-3">
                    <a href="<?php echo $item['whatsapp']; ?>" class="img-thumbnail" target="_blank"><span class="fab fa-whatsapp"></span></a>
                </section>
            </section>
        </section>
        <section class="col-6">
            <form action="" method="get" class="mt-2 rtlpersian">
                <section class="form-group">
                    <input type="text" class="form-control search" placeholder="جستجو...">
                </section>
            </form>
        </section>
    </section>
</footer>