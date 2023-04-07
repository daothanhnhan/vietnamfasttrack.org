<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_VIETNAMFASTTRACK_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header sticky-menu">
        <div class="gb-header-logo">
            <h1><a href="/"><img src="/images/logo.png" alt="" class="img-responsive"></a></h1>
        </div>
        <div class="gb-header-logon-text">
        <!-- <ul class="logo_flag">
            <li><a href="javascript:;" id="Tiếng Việt" onclick="translateLanguage(this.id);">
                    <img src="/images/flag/china.png" alt="" width="50"  class="img_flag"/></a> </li>
            <li><a href="javascript:;" id="English" onclick="translateLanguage(this.id);">
                    <img src="/images/flag/english.png" alt="" width="50"  class="img_flag" /></a> </li>
        </ul> -->
        <div class="translation-icons logo_flag" >
        <ul>
            <li>
                <a href="javascript:void(0)" class="nl" data-placement="0" onclick="lang_vn()"><img src="/images/flag/english.png" alt="" width="50"  class="img_flag"/></a>
            </li>
            <li>
                <a href="javascript:void(0)" class="de" data-placement="1" onclick="lang_en()"><img src="/images/flag/china.png" alt="" width="50"  class="img_flag" /></a>
            </li>
        </ul>
        </div>
            <?php include DIR_MENU."MS_MENU_VIETNAMFASTTRACK_0001.php";?>
        </div>
    </div>
</header>

<script src="./plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>