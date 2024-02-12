<?php
/*
 Template Name: Hệ Thống Cửa Hàng
 */
get_header();

?>



<main class="main" id="main">
    <section class="system-store mb-3">
        <div class="container-xl">
            <div class="system-store-all pb-4">
                <div class="system-store-title pb-4">
                    <a class="text-uppercase fs-3 fw-bold d-flex justify-content-center" href="#">
                        Hệ thống cửa hàng Ngọc Lan @
                    </a>
                </div>

                <div class="system-store-content">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col pb-3">
                            <div class="card border-0">
                                <div class="d-flex justify-content-between">
                                    <div class="name-address">
                                        <p class="fs-5 text-danger"><i
                                                class="fa-solid fa-location-dot pe-2 fs-5 text-warning"></i>Cửa hàng
                                            gần bạn nhất
                                        </p>
                                    </div>
                                    <div class="search-address">
                                        <form action="#">
                                            <input class="stext" type="text" name="search"
                                                placeholder="Tìm kiếm cửa hàng theo khu vực...">
                                            <button type="submit">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="card-body w-100 rounded info-store">
                                    <h5 class="card-title text-center text-danger">Thông báo việc tạm nhưng hoạt
                                        động ở cơ sở 1
                                    </h5>
                                    <ul class="list-info">
                                        <li class="list-info-item"><span class="fw-bold">Gián đoạn tạm thời:</span>
                                            Có thể xảy ra gián đoạn tạm
                                            thời trong hoạt động của nền tảng trong quá trình thử nghiệm.</li>
                                        <li class="list-info-item"><span class="fw-bold">Thay đổi giao diện và chức
                                                năng:</span> Đôi khi, giao
                                            diện và chức năng của nền tảng có thể thay đổi để phản ánh các cải tiến
                                            và sửa đổi được thực hiện.</li>
                                        <li class="list-info-item"><span class="fw-bold">Góp ý và Phản Hồi:</span>
                                            Chúng tôi rất hoan nghênh mọi
                                            góp ý và phản hồi từ bạn trong quá trình này.</li>
                                        <li class="list-info-item"><span class="fw-bold">Đáp ứng với phản hồi của
                                                cộng đồng:</span> Phản hồi từ
                                            bạn là vô cùng quan trọng đối với chúng tôi.</li>
                                        <li class="list-info-item"><span class="fw-bold">Kiểm tra và sửa đổi tính
                                                năng:</span> Chúng tôi sẽ kiểm
                                            tra và sửa đổi các tính năng hiện có để đảm bảo tính hoạt động ổn định
                                            và hiệu quả nhất cho bạn.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 w-100 h-100">
                                <iframe class="map-iframe"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.915172799875!2d105.80277597584139!3d21.03607988752603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf7092901a9%3A0xe8f0b7e262bf085c!2zR8OhYyBC4bq_cC0gR8OgIE7GsOG7m25nIEPGoW0gTGFt!5e0!3m2!1svi!2s!4v1706879845256!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="system-store-one pt-3 pb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase fw-bold text-danger">Cửa hàng số 01
                                </h5>
                                <p class="card-text text-center text-uppercase">Địa chỉ: 34 đường Cộng Hòa, Tân
                                    Bình, TP.HCM</p>
                                <div class="info d-flex justify-content-between">
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-phone-volume"></i>
                                        0978.262.565
                                    </p>
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-bag-shopping"></i> Đặt
                                        hàng
                                        online</p>
                                </div>
                                <div class="info-img d-flex justify-content-between w-100">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-1.jpg" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-2.png" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-3.jpeg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-0 w-100 h-100">
                            <iframe class="map-iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.915172799875!2d105.80277597584139!3d21.03607988752603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf7092901a9%3A0xe8f0b7e262bf085c!2zR8OhYyBC4bq_cC0gR8OgIE7GsOG7m25nIEPGoW0gTGFt!5e0!3m2!1svi!2s!4v1706879845256!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="system-store-one pt-3 pb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase fw-bold text-danger">Cửa hàng số 02
                                </h5>
                                <p class="card-text text-center text-uppercase">Địa chỉ: 42 Ngã 3 Mĩ Hạnh, Long An
                                </p>
                                <div class="info d-flex justify-content-between">
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-phone-volume"></i>
                                        0978.262.565
                                    </p>
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-bag-shopping"></i> Đặt
                                        hàng
                                        online</p>
                                </div>
                                <div class="info-img d-flex justify-content-between pb-3">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-4.jpg" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-5.jpg" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-6.png" alt="img">
                                </div>
                                <p class="card-text text-danger fs-4"><i class="fa-brands fa-salesforce"></i>
                                    Đang
                                    có chương trình khuyến mãi riêng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-0 w-100 h-100">
                            <iframe class="map-iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.915172799875!2d105.80277597584139!3d21.03607988752603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf7092901a9%3A0xe8f0b7e262bf085c!2zR8OhYyBC4bq_cC0gR8OgIE7GsOG7m25nIEPGoW0gTGFt!5e0!3m2!1svi!2s!4v1706879845256!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="system-store-one pt-3 pb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase fw-bold text-danger">Cửa hàng số 03
                                </h5>
                                <p class="card-text text-center text-uppercase">Địa chỉ: 56 Nam Kì khởi nghĩa,
                                    TP.HCM</p>
                                <div class="info d-flex justify-content-between">
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-phone-volume"></i>
                                        0978.262.565
                                    </p>
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-bag-shopping"></i> Đặt
                                        hàng
                                        online</p>
                                </div>
                                <div class="info-img d-flex justify-content-between">
                                    <img src=" <?php echo THEME_URL  ?>/assets/images/contact/img-1.jpg" alt="img">
                                    <img src=" <?php echo THEME_URL  ?>/assets/images/contact/img-2.png" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-3.jpeg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-0 w-100 h-100">
                            <iframe class="map-iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.915172799875!2d105.80277597584139!3d21.03607988752603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf7092901a9%3A0xe8f0b7e262bf085c!2zR8OhYyBC4bq_cC0gR8OgIE7GsOG7m25nIEPGoW0gTGFt!5e0!3m2!1svi!2s!4v1706879845256!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="system-store-one pt-3 pb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase fw-bold text-danger">Cửa hàng số 04
                                </h5>
                                <p class="card-text text-center text-uppercase">Địa chỉ: 34 đường Cộng Hòa, Tân
                                    Bình, TP.HCM</p>
                                <div class="info d-flex justify-content-between">
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-phone-volume"></i>
                                        0978.262.565
                                    </p>
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-bag-shopping"></i> Đặt
                                        hàng
                                        online</p>
                                </div>
                                <div class="info-img d-flex justify-content-between">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-4.jpg" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-5.jpg" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-6.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-0 w-100 h-100">
                            <iframe class="map-iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.915172799875!2d105.80277597584139!3d21.03607988752603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf7092901a9%3A0xe8f0b7e262bf085c!2zR8OhYyBC4bq_cC0gR8OgIE7GsOG7m25nIEPGoW0gTGFt!5e0!3m2!1svi!2s!4v1706879845256!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="system-store-one pt-3 pb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase fw-bold text-danger">Cửa hàng số 05
                                </h5>
                                <p class="card-text text-center text-uppercase">Địa chỉ: 34 đường Cộng Hòa, Tân
                                    Bình, TP.HCM</p>
                                <div class="info d-flex justify-content-between">
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-phone-volume"></i>
                                        0978.262.565
                                    </p>
                                    <p class="text-uppercase fw-bold"><i class="fa-solid fa-bag-shopping"></i> Đặt
                                        hàng
                                        online</p>
                                </div>
                                <div class="info-img d-flex justify-content-between">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-1.jpg" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-2.png" alt="img">
                                    <img src="<?php echo THEME_URL  ?>/assets/images/contact/img-3.jpeg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-0 w-100 h-100">
                            <iframe class="map-iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.915172799875!2d105.80277597584139!3d21.03607988752603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf7092901a9%3A0xe8f0b7e262bf085c!2zR8OhYyBC4bq_cC0gR8OgIE7GsOG7m25nIEPGoW0gTGFt!5e0!3m2!1svi!2s!4v1706879845256!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nice-video mt-4">
        <div class="container-xl">
            <div class="row row-cols-1 row-cols-md-3 g-4 pb-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="1236" height="695" src="https://www.youtube.com/embed/ngaWzaNDKks"
                                title="Đặc Sản Tây Nguyên GÀ NƯỚNG VÀ CƠM LAM Bằng Nồi Chiên Không Dầu-THƠM NGON và DỄ LÀM"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ratio ratio-16x9">
                        <iframe width="1236" height="695" src="https://www.youtube.com/embed/dtck5AitLCY"
                            title="Thiên đường ẩm thực 6 | Tập 1: Cơm lam gà sa lửa" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="1236" height="695" src="https://www.youtube.com/embed/ngaWzaNDKks"
                                title="Đặc Sản Tây Nguyên GÀ NƯỚNG VÀ CƠM LAM Bằng Nồi Chiên Không Dầu-THƠM NGON và DỄ LÀM"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>