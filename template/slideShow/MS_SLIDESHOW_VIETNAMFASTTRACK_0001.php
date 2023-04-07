<link rel="stylesheet" href="./plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="./plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-slideshow">
    <div class="gb-slideshow-slide owl-carousel owl-theme">
        <div class="item">
            <img src="/images/slide/Slider1.jpg" alt="" class="img-responsive">
        </div>
        <div class="item">
            <img src="/images/slide/Slider2.jpg" alt="" class="img-responsive">
        </div>
    </div>
</div>

<script src="./plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-slideshow-slide').owlCarousel({
            loop:true,
            responsiveClass:true,
            autoplay:true,
            nav:true,
            navText:[],
            dots:true,
            responsive:{
                0:{
                    items:1
                }
            }
        });
    });
</script>