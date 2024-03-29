<!-- Hero Section Begin -->
<?php  if(!empty($advertises)){?>
<section class="hero">
    <div class="hero__slider owl-carousel">
        <?php for($i = 0;$i<count($advertises["title"]);$i++){  ?>
        <div class="hero__items set-bg"
            data-setbg="<?php echo HOST_ROOT ?>/uploads/<?php echo $advertises["image"][$i] ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6><?php echo $advertises["title"][$i]  ?></h6>
                            <h2><?php echo $advertises["header"][$i]  ?></h2>
                            <p><?php  echo html_entity_decode($advertises["description"][$i]) ?></p>
                            <a href="shop" class="primary-btn">MUA SẮM NGAY <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a target="_blank" href="<?php echo $facebook["opt_value"] ?>"><i
                                        class="fa fa-facebook"></i></a>
                                <a target="_blank" href="<?php echo $twitter["opt_value"] ?>"><i
                                        class="fa fa-twitter"></i></a>
                                <a target="_blank" href="<?php echo $youtube["opt_value"] ?>"><i
                                        class="fa fa-youtube"></i></a>
                                <a target="_blank" href="<?php echo $instagram["opt_value"] ?>"><i
                                        class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  } ?>
    </div>
</section>
<?php }  ?>

<!-- Hero Section End -->


<section class="product spad banner spad" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Bán chạy nhất</li>
                    <li data-filter=".new-arrivals">Mới ra mắt</li>
                    <li data-filter=".hot-sales">Giảm giá</li>
                </ul>
            </div>
        </div>


        <div class="row product__filter">
            <?php foreach($dsBSeller as $sp){  ?>
            <?php if (in_array($sp["id"], array_column($dsNewArrival, "id")) &&in_array($sp["id"],array_column($dsBSale, "id")) ) {?>
            <?php echo "<div class='col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals hot-sales'>" ?>
            <?php  }else if(in_array($sp["id"], array_column($dsNewArrival, "id"))){?>
            <?php echo "<div class='col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals '>" ?>
            <?php   }else if(in_array($sp["id"], array_column($dsBSale, "id"))){ ?>
            <?php echo "<div class='col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales'>" ?>
            <?php  }else{?>
            <?php echo "<div class='col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix '>" ?>
            <?php  } ?>

            <div class="product__item">
                <a href="detail?idsp=<?php echo $sp['id'] ?>" data-product-id="<?php echo $sp['id'] ?>">
                    <div class="product__item__pic set-bg"
                        data-setbg="<?php echo HOST_ROOT ?>/uploads/<?php echo $sp["img"]  ?>">
                        <?php if($sp["type"]!="normal"){  ?>
                        <span class="label"><?php echo $sp["type"]  ?></span>

                        <?php }  ?>
                    </div>
                </a>
                <div class="product__item__text">
                    <h6><?php echo $sp["name"]  ?></h6>
                    <a href="detail?idsp=<?php echo $sp['id'] ?>" data-product-id="<?php echo $sp['id'] ?>">+ Xem chi tiết</a>
                    <div class="rating">
                        <?php 
                            for ($j = 1; $j <= 5; $j++) { ?>
                        <?php if ($j <= $sp['sao']) { ?>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <?php } else { ?>
                        <i class="fa fa-star-o"></i>
                        <?php } ?>
                        <?php }  ?>
                    </div>
                    <?php if( $sp["price"] -  $sp["sale"] == 0 ){?>
                    <h5>$<?php echo $sp["price"]  ?></h5>
                    <?php   }else{ ?>
                    <div style="display: flex;">
                        <del class="del-product">$<?php echo $sp["price"]  ?></del>
                        <h5>$<?php echo $sp["sale"]  ?></h5>
                    </div>

                    <?php   } ?>

                </div>
            </div>
        </div>
        <?php  } ?>
    </div>
    </div>
</section>

<!-- Categories Section Begin -->

<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="instagram latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo HOST_ROOT ?>/public/assets/client/img/instagram/instagram-4.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo HOST_ROOT ?>/public/assets/client/img/instagram/6-1.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo HOST_ROOT ?>/public/assets/client/img/instagram/instagram-6.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo HOST_ROOT ?>/public/assets/client/img/instagram/6-4.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo HOST_ROOT ?>/public/assets/client/img/instagram/instagram-5.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="<?php echo HOST_ROOT ?>/public/assets/client/img/instagram/6-3.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Charm in Style - Tahashop: Nơi Hòa Quyện Thời Trang và Phong Cách, Khiến Bạn Nổi Bật Mỗi Ngày!</p>
                    <h3>Thời trang nữ</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->