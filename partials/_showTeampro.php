<?php
    $id=$_GET['id'];
    $teampro=selectbyidteampro($id);
?>
<section class="portfolio">
    <section class="row ml-0 mr-0">
        <section class="col-4 offset-4">
            <h2 class="text-center font-weight-bold"><?php echo $teampro['title']; ?></h2>
            <section class="border_web"></section>
        </section>
    </section>
    <section class="row ml-0 mr-0">
        <section class="col-10 offset-1">
            <section class="row mr-0 ml-0 mt-5 d-flex flex-row-reverse">
                    <section class="col-10 offset-1 mb-3">
                        <img src="<?php echo URL ?>administrator/admin/image/teampro/<?php echo $teampro['image']; ?>" class="img-fluid" alt="" style="width: 100% !important; height: 500px !important;">
                        <p class="rtlpersian text-justify"><?php echo substr($teampro['description'],0,100) ?></p>
                    </section>
            </section>
        </section>

    </section>
</section>