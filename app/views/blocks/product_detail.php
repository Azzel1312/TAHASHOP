<div class="container single_product_container">
    <div class="row">
        <div class="col-lg-7">
            <div class="single_product_pics">
                <div class="row">
                    <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                        <div class="single_product_thumbnails">
                            <ul>
                                <?php $defaultActiveImg = 1;
                                for ($i = 0; $i < count($dsImage); $i++) {
                                    if ($i == $defaultActiveImg - 1) {
                                ?>
                                <li class="active"><img
                                        src="<?php echo HOST_ROOT ?>/uploads/<?php echo $dsImage[$i]["image"] ?>" alt=""
                                        data-image="<?php echo HOST_ROOT ?>/uploads/<?php echo $dsImage[$i]["image"] ?>">
                                </li>
                                <?php
                                    } else {
                                    ?>
                                <li><img src="<?php echo HOST_ROOT ?>/uploads/<?php echo $dsImage[$i]["image"] ?>"
                                        alt=""
                                        data-image="<?php echo HOST_ROOT ?>/uploads/<?php echo $dsImage[$i]["image"] ?>">
                                </li>
                                <?php

                                    }
                                }
                                ?>
                                <?php   ?>
                                <?php   ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 image_col order-lg-2 order-1">
                        <div class="single_product_image">
                            <div class="single_product_image_background"
                                style="background-image:url(<?php echo HOST_ROOT ?>/uploads/<?php echo $sp["img"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="product_details">
                <div class="product_details_title">
                    <h2><?php echo $sp['name']  ?></h2>
                    <p><?php echo $loai["name"] . " - " . $thuongHieu["name"] ?></p>
                </div>
                <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                    <span class="ti-truck"></span><span>GIAO HÀNG MIỄN PHÍ</span>
                </div>
                <?php if ($sp['sale'] < $sp['price']) { ?>
                <div class="original_price">$<?php echo $sp["price"] ?></div>
                <div class="product_price">$<?php echo $sp["sale"] ?></div>
                <?php } else {  ?>
                <div class="product_price">$<?php echo $sp["price"] ?></div>
                <?php } ?>

                <ul class="star_rating">
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i > $soSao) { ?>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    <?php } else { ?>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <?php }
                    }
                    ?>
                    <?php  ?>

                </ul>
                <div class="product__details__option__size">
                    <span>Size:</span>

                    <!-- Giai thich: Cho mặc định size S được chọn. Nếu như size S hết hàng thì cộng defaultSize lên -->
                    <?php foreach ($dsSizes as $s) : ?>

                    <?php if ($s["quantity"] > 0) { ?>
                    <div class="size-custom">
                        <input type="radio" name="size" value="<?php echo $s["id"] ?>">
                        <?php echo $s["name"]  ?>
                    </div>


                    <?php } else { ?>
                    <div class="size-custom disabled">
                        <input type="radio" name="size" value="<?php echo $s["id"] ?>" disabled>
                        <?php echo $s["name"]  ?>
                    </div>



                    <?php } ?>

                    <?php  ?>

                    <?php endforeach ?>
                    <input id="idspTemp" type="hidden" value="<?php echo $sp['id'] ?>">
                </div>
                <div></div>
                <span>Sản phẩm hiện có: </span><span id="slgSpTD"><?php echo $slg ?></span>
                <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                    <span>Số lượng:</span>
                    <div class="quantity_selector">
                        <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                        <span id="quantity_value">1</span>
                        <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                    </div>
                    <div class="red_button add_to_cart_button"><a onclick="addToCart(<?php echo $sp['id'] ?>)">Thêm vào giỏ hàng</a></div>
                    <div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Tabs -->

<div class="tabs_section_container">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabs_container">
                    <ul
                        class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                        <li class="tab active" data-active-tab="tab_1"><span>Mô tả</span></li>
                        <li class="tab" data-active-tab="tab_2"><span>Thông tin thêm</span></li>
                        <li class="tab " data-active-tab="tab_3"><span>Đánh giá
                                (<span class="count-review"><?php echo $soReview ?></span>)</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Tab Description -->

                <div id="tab_1" class="tab_container active">
                    <div class="row">
                        <div class="col-lg-5 desc_col">
                            <div class="tab_title">
                                <h4>MÔ TẢ SẢN PHẨM</h4>
                            </div>
                            <div class="tab_text_block">
                                <h2><?php echo $sp["name"] ?></h2>
                                <p><?php echo html_entity_decode($sp["description"]) ?></p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 desc_col">
                            <div class="tab_image">
                                <img src="<?php echo HOST_ROOT ?>/uploads/<?php echo $sp["img"] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Additional Info -->

                <div id="tab_2" class="tab_container">
                    <div class="row">
                        <div class="col additional_info_col">
                            <div class="tab_title additional_info_title">
                                <h4>THÔNG TIN THÊM</h4>
                            </div>
                            <p>DANH MỤC:<span><?php echo $loai["name"] ?></span></p>
                            <p>THƯƠNG HIỆU:<span><?php echo $thuongHieu["name"] ?></span></p>
                            <p>SIZE:<span>
                                    <?php foreach ($dsSizes as $s) :
                                        if ($s["quantity"] > 0) {
                                            echo $s["name"] . " ; ";
                                        }
                                    endforeach ?>
                                </span></p>
                        </div>
                    </div>
                </div>

                <!-- Tab Reviews -->

                <div id="tab_3" class="tab_container ">
                    <div class="row">
                        <input type="hidden" class="url_module" value="<?php echo HOST_ROOT.'/detail' ?>">

                        <!-- User Reviews -->

                        <div class="col-lg-6 reviews_col">
                            <div class="tab_title reviews_title">
                                <h4>ĐÁNH GIÁ (<span class="count-review"><?php echo $soReview  ?></span>)</h4>
                            </div>

                            <div class="fetch-data-table">


                            </div>
                            <!-- User Review -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="fetch-pagination">
                                        <!-- render pagination -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Review -->

                        <div class="col-lg-6 add_review_col">

                            <div class="add_review">
                                <form id="review_form">
                                    <div>
                                        <div class="alert alert-success alert-review hidden">
                                        </div>
                                        <h1>Add Review</h1>
                                        <input id="review_name" style="margin: 0;" class="form_input input_name"
                                            type="text" name="name" placeholder="Name*" spellcheck="false"
                                            data-error="Name is required.">
                                        <span class="error error-review_name"></span>
                                        <input id="review_email" style="margin-top: 20px;"
                                            class="form_input input_email" type="text" name="email" placeholder="Email*"
                                            spellcheck="false" data-error="Valid email is required.">
                                        <span class="error error-review_email"></span>
                                    </div>
                                    <div>
                                        <h1>Đánh giá của bạn:</h1>
                                        <ul class="user_star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <textarea id="review_message" class="input_review" name="message"
                                            placeholder="Your Review" rows="4" spellcheck="false"
                                            data-error="Please, leave us a review."></textarea>
                                        <span class="error error-review_message"></span>
                                    </div>
                                    <div class="text-left text-sm-right">
                                        <button id="review_submit" type="submit"
                                            class="red_button review_submit_btn trans_300" value="Submit"
                                            onclick="onSubmitReview(event)">GỬI</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>





<!-- Related Section Begin -->
<section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">Sản phẩm liên quan</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($dssplq as $sp) :  ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                    <a href="detail?idsp=<?php echo $sp['id'] ?>" data-product-id="<?php echo $sp['id'] ?>">
                        <div class="product__item__pic set-bg"
                            data-setbg="<?php echo HOST_ROOT ?>/uploads/<?php echo $sp["img"] ?>">

                            <?php if ($sp["type"] != "normal") {  ?>
                            <span class="label"><?php echo $sp["type"]  ?></span>

                            <?php }  ?>


                        </div>
                    </a>
                    <div class="product__item__text">
                        <h6><?php echo $sp['name'] ?></h6>
                        <a href="detail?idsp=<?php echo $sp['id'] ?>" class="add-cart">XEM CHI TIẾT</a>
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
            <?php endforeach ?>
        </div>
    </div>

</section>
<!-- Related Section End -->

<hr>

<!-- Benefit -->
<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Giao hàng miễn phí</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Hình thức thanh toán đa dạng</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Đổi trả hàng trong vòng 7 ngày</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Mở cửa hàng ngày</h6>
                        <p>8 giờ sáng - 9 giờ tối</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter -->

<div class="newsletter">

</div>

<!-- Footer -->