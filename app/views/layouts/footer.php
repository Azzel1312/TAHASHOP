<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <?php if(!empty($footer["des_1"])){ ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src="<?php echo HOST_ROOT ?>/public/assets/client/img/taha-logo.png"
                                alt=""></a>
                    </div>
                    <!--<p><?php echo $footer["des_1"] ?></p>-->
                </div>
            </div>
            <?php }  ?>
            <?php  ?>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <?php if(!empty($footer["title_2"])){  ?>
                    <h6>Chính sách</h6>
                    <?php  } ?>
                    <?php  if(!empty($footer["name_quicklink"])){ ?>
                    <ul>
                        <?php for($i=0;$i<count($footer["name_quicklink"]);$i++){  ?>
                        <li><a href="<?php echo $footer["link_quicklink"][$i]  ?>">
                                <?php echo $footer["name_quicklink"][$i]  ?></a></li>
                        <?php  } ?>
                    </ul>
                    <?php  } ?>
                </div>
            </div>
            <?php  ?>
            <?php  ?>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <?php  if(!empty($footer["title_3"])){ ?>
                    <h6><?php echo $footer["title_3"]  ?></h6>
                    <?php } ?>
                    <?php if(!empty($footer["name_quicklink2"])){  ?>
                    <ul>
                        <?php for($i=0;$i<count($footer["name_quicklink2"]);$i++){  ?>
                        <li><a href="<?php echo $footer["link_quicklink2"][$i]  ?>">
                                <?php echo $footer["name_quicklink2"][$i]  ?></a></li>
                        <?php  } ?>
                    </ul>
                    <?php  } ?>
                </div>
            </div>
            <?php  ?>
            <?php  ?>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <?php if(!empty($footer["title_4"])){  ?>
                    <h6><?php echo $footer["title_4"]  ?></h6>
                    <?php  } ?>
                    <div class="footer__newslatter">
                        <?php if(!empty($footer["des_4"])){  ?>
                        <p><?php echo $footer["des_4"]  ?></p>
                        <?php  } ?>
                        <form>
                            <input class="subcribe" type="text" spellcheck="false" placeholder="Your email"
                                style="color: white;">
                            <button type="submit" onclick="handleSubcribe(event)"><span
                                    class="icon_mail_alt"></span></button>
                            <span class="error error-subcribe"></span>
                            <span class="success-subcribe" style="color: #cdbc39;"></span>
                        </form>
                    </div>
                </div>
            </div>
            <?php  ?>
        </div>
        <?php  if(!empty($footer["copy_right"])){ ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">

                    <p><?php echo $footer["copy_right"]  ?>
                    </p>

                </div>
            </div>
        </div>
        <?php  } ?>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<input type="hidden" id="_HOST_ROOT" value="<?php echo HOST_ROOT; ?>">
<!-- Search End -->

<!-- Js Plugins -->
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/jquery-3.3.1.min.js?ver=<?php echo rand() ?>"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/bootstrap.min.js?ver=<?php echo rand() ?>"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/jquery.nice-select.min.js?ver=<?php echo rand() ?>">
</script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/jquery.nicescroll.min.js?ver=<?php echo rand() ?>">
</script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/jquery.magnific-popup.min.js?ver=<?php echo rand() ?>">
</script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/jquery.countdown.min.js?ver=<?php echo rand() ?>"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/jquery.slicknav.js?ver=<?php echo rand() ?>"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/mixitup.min.js?ver=<?php echo rand() ?>"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/owl.carousel.min.js?ver=<?php echo rand() ?>"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/main.js?ver=<?php echo rand() ?>"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/SanPhamAjax.js?ver=<?php echo rand() ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo HOST_ROOT ?>/public/assets/client/js/DonHangAjax.js?ver=<?php echo rand() ?>"></script>

</body>

</html>