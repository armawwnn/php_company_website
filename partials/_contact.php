<section class="contact">
    <section class="row ml-0 mr-0 mb-5">
        <section class="col-4 offset-4 ">
            <h2 class="text-center font-weight-bold ">تماس با ما</h2>
            <section class="border_web"></section>
        </section>
    </section>
    <section class="row ml-0 mr-0 mb-5 ">
        <section class="col-8 offset-2">
            <form action="<?php echo URL ?>administrator/admin/contact/insert.php" id="contact" method="post" class="rtlpersian">
                <section class="form-group">
                    <label for="fullname" class="text-center d-block">نام و نام خانوادگی</label>
                    <input type="text" class="form-control border_form" name="fullname" id="fullname">
                </section>
                <section class="form-group">
                    <label for="email" class="text-center d-block">ایمیل</label>
                    <input type="text" class="form-control border_form" name="email" id="email">
                </section>
                <section class="form-group">
                    <label for="comment" class="text-center d-block">پیشنهادات</label>
                    <textarea name="comment" id="comment" class="form-control border_form comment"></textarea>
                </section>
                <section class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="ارسال">
                </section>
            </form>
        </section>
    </section>
</section>