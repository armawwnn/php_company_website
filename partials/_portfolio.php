<?php
    $teampro=selectteampro();

?>
<section class="portfolio">
    <section class="row ml-0 mr-0">
        <section class="col-4 offset-4">
            <h2 class="text-center font-weight-bold">خدمات تیم برنامه نویسی</h2>
            <section class="border_web"></section>
        </section>
    </section>
    <section class="row ml-0 mr-0">
        <section class="col-10 offset-1">
            <section class="row mr-0 ml-0 mt-5 d-flex flex-row-reverse">
                <?php foreach ($teampro as $item): ?>
                <section class="col-4">
                    <img src="<?php echo URL ?>administrator/admin/image/teampro/<?php echo $item['image']; ?>" class="img-fluid" alt="" style="width: 300px !important; height: 250px !important;">
                    <h3 class="text-right mt-2 md-2"><?php echo $item['title']; ?></h3>
                    <p class="rtlpersian text-justify"><?php echo substr($item['description'],0,100) ?></p>
                    <a href="teampro.php?id=<?php echo $item['id'] ?>" class="btn btn-info btn-block">بیشتر</a>
                </section>
                <?php endforeach; ?>
            </section>
        </section>

    </section>
</section>