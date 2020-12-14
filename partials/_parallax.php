<?php
    $item=lastparallax();
?>
<section class="parallax" style="background: url('administrator/admin/image/parallax/<?php echo $item['image'];?>') center
center no-repeat fixed;background-size: cover">
    <section class="row ml-0 mr-0 pt-6">
        <section class="col-12">
            <section class="row ml-0 mr-0">
                <section class="col-6 offset-3 mb-3">
                    <h3 class="text-white text-center"><?php echo $item['title_parallax']; ?></h3>
                    <p class="text-white text-justify rtlpersian line_height"><?php echo $item['description']; ?></p>
                </section>
            </section>
        </section>
    </section>

</section>
</section>
