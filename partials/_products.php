<?php
    $query = selectgallery();
?>
<section class="products">
    <section class="row ml-0 mr-0">
        <section class="col-10 offset-1">
            <section class="row ml-0 mr-0">
                <section class="col-6 offset-3">
                    <h2 class="text-center mb-3 ">نمونه کار های تیم گرافیکی</h2>
                    <section class="border_web"></section>
                </section>
            </section>
            <section class="row">
                <section class="col-12 mt-5">
                    <section class="row ml-0 mr-0">
                        <?php foreach ($query as $item): ?>
                        <section class="col-3 mb-3">
                            <section>
                                <a class="example-image-link"
                                   href="<?php echo URL?>administrator/admin/image/gallery/<?php echo $item['image']?>" data-lightbox="example-1"
                                   data-title="<?php echo $item['caption'] ?>">
                                    <img class="example-image img-fluid image_product"
                                         src="<?php echo URL?>administrator/admin/image/gallery/<?php echo $item['image']?>" alt="image-1"/></a>
                            </section>
                        </section>
                        <?php endforeach; ?>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>