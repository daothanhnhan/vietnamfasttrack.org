<?php 
    $action_email = new action_email();
    $action_email->lien_he_vnft();
?>
<div class="gb-contact-page">
    <div class="row">
        <div class="col-md-6 contact-left">
            <div class="location-map">
                <div class="gb-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.034338444489!2d105.78106471537669!3d21.031311993066073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4b5f406cfb%3A0xac58b7c7e4addc84!2sSannam+Building!5e0!3m2!1svi!2s!4v1530754447081" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="contact-infos">
                <h5>Contact</h5>
                <ul>
                    <li>
                        <p><span>Address:</span> <?= $rowConfig['content_home1'] ?></p>
                    </li>
                    <li>
                        <p><span>Email:</span> <?= $rowConfig['content_home2'] ?></p>
                    </li>
                    <li>
                        <p><span>Hotline/viber/whatsapp:</span> <?= $rowConfig['content_home3'] ?></p>
                    </li>
                </ul>
            </div> <!-- .contact-infos -->
            <div class="social-links-section">
                <div class="menu-social-menu-container">
                    <ul id="social-menu" class="menu">
                        <li><a target="_blank" href="">YouTube</a></li>
                        <li><a target="_blank" href="">LinkedIn</a></li>
                    </ul>
                </div>
            </div> <!-- .social-links-section -->
        </div>
        <div class="col-sm-6 contact-right">
            <h3>Send us a message or question</h3>
            <p>If you want to book or get a detailed quote please use our <a href="">Request a Quote</a> form.</p>
            <div class="contact-right-form">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Your Name <sup>*</sup></label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Your Email <sup>*</sup></label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Your Address <sup>*</sup></label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label>Your Message <sup>*</sup></label>
                        <textarea class="form-control" rows="6" name="note"></textarea>
                    </div>
                    <button class="btn btn-submit" type="submit" name="send_contact">Submit</button>
                </form>
            </div>
            <!-- <ul class="tag-redmore">
                <li>Readmore</li>
                <li><a href="">Singapore</a></li>
                <li><a href="">South Africa</a></li>
                <li><a href="">Hong Kong</a></li>
                <li><a href="">China</a></li>
                <li><a href="">Australia</a></li>
                <li><a href="">Thailand</a></li>
                <li><a href="">Indonesia</a></li>
                <li><a href="">Cambodia</a></li>
                <li><a href="">Vietnam</a></li>
                <li><a href="">Laos</a></li>
                <li><a href="">India</a></li>
                <li><a href="">New Zealand</a></li>
                <li><a href="">Bali</a></li>
                <li><a href="">Bangkok</a></li>
                <li><a href="">Beijing</a></li>
                <li><a href="">Brisbane</a></li>
                <li><a href="">Chiang Mai</a></li>
                <li><a href="">Guangzhou</a></li>
                <li><a href="">Jakarta</a></li>
            </ul> -->
        </div>
    </div>
</div>