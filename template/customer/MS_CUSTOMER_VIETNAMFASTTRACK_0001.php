<link rel="stylesheet" href="./plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="./plugin/owl-carouse/owl.theme.default.min.css">

<div class="gb-customer-say">
    <div class="container">
        <div class="gb-customer-say-slide owl-carousel owl-theme">
            <div class="item">
                <div class="gb-customer-say-item">
                    <div class="media-body">
                        <div class="excerpt">
                            <div class="big-triangle"></div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                            <p>Bây giờ không phải chỉ có phái đẹp mới có thói quen đi Spa, tôi nghĩ đàn ông cũng nên quan
                                tâm tới bản thân mình hơn, đi Spa là một trong những thói quen tốt để giữ gìn sức khỏe.</p>
                        </div>
                        <div class="heading">
                            Hương Giang <span>Đến từ  Vũng Tàu</span>
                        </div>
                    </div>
                    <div class="media-image">
                        <img src="/images/customer/1.jpg" class="attachment-full img-circle" alt="2">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="gb-customer-say-item">
                    <div class="media-body text-center">
                        <div class="excerpt">
                            <div class="big-triangle"></div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                            <p>Bây giờ không phải chỉ có phái đẹp mới có thói quen đi Spa, tôi nghĩ đàn ông cũng nên quan
                                tâm tới bản thân mình hơn, đi Spa là một trong những thói quen tốt để giữ gìn sức khỏe.</p>
                        </div>
                        <div class="heading">
                            Hương Giang <span>Đến từ  Vũng Tàu</span>
                        </div>
                    </div>
                    <div class="media-image image-rounded">
                        <img src="/images/customer/2.jpg" class="attachment-full img-circle" alt="2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="./plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-customer-say-slide').owlCarousel({
            loop:true,
            responsiveClass:true,
            autoplay:true,
            nav:false,
            margin:30,
            navText:[],
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                767:{
                  item:2
                },
                992:{
                    item:4
                }
            }
        });
    });
</script>
