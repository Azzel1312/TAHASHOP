<!-- Breadcrumb Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__pic">
                    <img src="<?php echo HOST_ROOT.'/public/assets/client/' ?>img/about/about-us.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="about__item">
                    <h4>Tại sao nên chọn TAHAShop ?</h4>
                    <p>Tahashop là lựa chọn hàng đầu cho phong cách và chất lượng. Với bộ sưu tập đa dạng, từ thời trang nữ đến thể thao, chúng tôi cam kết mang đến trải nghiệm mua sắm không giới hạn. Chọn Tahashop, bạn chọn sự đẳng cấp, sự độc đáo, và sự tự tin - nơi nâng tầm vẻ đẹp của bạn.
                    <br><br>Với những tiện ích mua sắm như vận chuyển miễn phí, dễ dàng đổi trả, và chương trình tích điểm hấp dẫn, TAHAShop không chỉ là nơi mua sắm, mà còn là trải nghiệm đầy đủ tiện ích cho người yêu thời trang. 
                    </p>
                </div>
            </div>
            <!--<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Chúng tôi là ai ?</h4>
                    <p>In this digital generation where information can be easily obtained within seconds, business
                        cards still have retained their importance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Tại sao nên chọn chúng tôi ?</h4>
                    <p>A two or three storey house is the ideal way to maximise the piece of earth on which our home
                        sits, but for older or infirm people.</p>
                </div>
            </div>-->
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Testimonial Section End -->

<!-- Counter Section Begin -->
<section class="counter spad">
    <div class="container">
        <div class="row">
            <?php  if(!empty($ourClients)){ ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num"><?php echo $ourClients  ?></h2>
                    </div>
                    <span>Khách hàng <br />của chúng tôi</span>
                </div>
            </div>
            <?php  } ?>
            <?php  if(!empty($totalCategory)){ ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num"><?php  echo $totalCategory ?></h2>
                    </div>
                    <span>Danh mục <br />sản phẩm</span>
                </div>
            </div>
            <?php  } ?>
            <?php  if(!empty($generalCountry)){ ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num"><?php  echo $generalCountry ?></h2>
                    </div>
                    <span>Quốc gia</span>
                </div>
            </div>
            <?php  } ?>
            <?php  if(!empty($happyCustomer)){ ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num"><?php  echo $happyCustomer ?></h2>
                        <strong>%</strong>
                    </div>
                    <span>Khách hàng <br />hài lòng</span>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <?php  if(!empty($ourTeam["heading_1"])){ ?>
                    <span></span>
                    <?php  } ?>
                    <?php  if(!empty($ourTeam["heading_2"])){ ?>
                    <h2>THÀNH VIÊN</h2>
                    <?php  } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php  if(!empty($ourTeam["name"])){ ?>
            <?php for($i=0;$i<count($ourTeam["name"]);$i++) { ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="<?php echo HOST_ROOT ?>/uploads/<?php  echo $ourTeam["image"][$i] ?>" alt="">
                    <h4><?php echo $ourTeam["name"][$i]  ?></h4>
                    <span><?php echo $ourTeam["position"][$i]  ?></span>
                </div>
            </div>
            <?php } ?>
            <?php  } ?>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Client Section Begin -->
<section class="clients spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <?php  if(!empty($partner["heading_1"])){ ?>
                    <span>Đối tác</span>
                    <?php  } ?>
                    <?php  if(!empty($partner["heading_2"])){ ?>
                    <h2><?php echo $partner["heading_2"] ?></h2>
                    <?php  } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php  if(!empty($partner["image"]) && !empty($partner["link"])){ ?>
            <?php for($i=0;$i<count($partner["image"]);$i++){  ?>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="<?php echo $partner["link"][$i] ?>" class="client__item"><img
                        src="<?php echo HOST_ROOT ?>/uploads/<?php echo  $partner["image"][$i] ?>" alt=""></a>
            </div>
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
</section>