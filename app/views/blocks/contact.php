<!-- Map Begin -->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15672.924961103905!2d106.8030541!3d10.8700089!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2sUniversity%20of%20Information%20Technology%20-%20VNUHCM!5e0!3m2!1sen!2s!4v1703564407442!5m2!1sen!2s"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Thông tin</span>
                        <h2>Liên hệ với chúng tôi</h2>
                        <p>Hãy để TAHAShop biến ý kiến và ý tưởng của bạn thành hiện thực. Chúng tôi luôn lắng nghe và sẵn sàng đồng hành cùng bạn.</p>
                    </div>
                    <ul>
                        <li>
                            <h4>Viet Nam</h4>
                            <p><?php echo $address["opt_value"] ?><br /><?php echo $hotline["opt_value"] ?></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="alert alert-danger btn-block alert-contact hidden">
                            </div>
                            <div class="col-lg-12">
                                <input spellcheck="false" class="name-contact" type="text" placeholder="Tên"
                                    style="margin: 0; color: black;">
                                <span class="error error-name-contact"></span>
                            </div>
                            <div class="col-lg-12">
                                <input style="margin: 0; margin-top: 30px; color: black;" spellcheck="false"
                                    class="email-contact" type="text" placeholder="Email">
                                <span class="error error-email-contact"></span>
                            </div>
                            <div class="col-lg-12">
                                <textarea spellcheck="false" style="margin: 0;color: black; margin-top: 30px;"
                                    class="message" placeholder="Lời nhắn"></textarea>
                                <span class="error error-message"></span>
                            </div>
                        </div>
                        <button type="submit" class="site-btn btn-block mt-3" onclick="sendMessage(event)">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Footer Section Begin -->

<!-- Footer Section End -->