<?php
//phpinfo();die;
session_start();
ob_start();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$folder = dirname(__FILE__);
include_once('config.php');
include_once('__autoload.php');
$action = new action();
include_once dirname(__FILE__).DIR_FUNCTIONS."database.php";
// $urlAnalytic = $action->showabc();    
include_once dirname(__FILE__).DIR_FUNCTIONS_PAGING."pagination.php";
include_once 'functions/phpmailer/class.smtp.php';
include_once 'functions/phpmailer/class.phpmailer.php';
include_once "functions/vi_en.php";
// // LÀM RÕ NHỮNG THƯ VIỆN NÀY
// // include_once('lib/vi_en.php');
include_once('functions/nganLuong/config.php');
include_once('functions/nganLuong/NL_Checkoutv3.php');
include_once "functions/action_email.php";
include_once "functions/action_page.php";
// // LÀM RÕ Install Cart

// Install MultiLanguage
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE."lang_config.php";
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE.$lang_file;
// Install Friendly Url
include_once dirname(__FILE__).DIR_FUNCTIONS_URL."url_config.php";
// Configure Website
include_once dirname(__FILE__).DIR_FUNCTIONS."website_config.php";
// echo $translate['link_contact'];die;
$trang = isset($_GET['trang']) ? $_GET['trang'] : '1';
$action = new action();
$cart = new action_cart();
$menu = new action_menu();
$action_news = new action_news();
if($lang == "vn"){
    $rowConfig_lang = $action->getDetail('config_languages','id',1);
}else{
    $rowConfig_lang = $action->getDetail('config_languages','id',2);
}


$rowConfig = $action->getDetail('config','config_id',1);
?>
<?php 
function curPageURL_paypal() {
     $pageURL = 'http';
     if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].'/';
     } else {
      $pageURL .= $_SERVER["SERVER_NAME"].'/';
     }
     return $pageURL;
}
$link_paypal = curPageURL_paypal();//die($link_paypal);

include_once dirname(__FILE__).'/functions/vendor/autoload.php';

// define('SITE_URL', 'http://vietnamfasttrack.org/');
define('SITE_URL', $link_paypal);

// tuan
// $paypal = new \PayPal\Rest\ApiContext(
//         new \PayPal\Auth\OAuthTokenCredential(
//                 'AYq5y9QlbbGxamZstVQWDD8-WzIgMcHfbcKJazHRSy7_ncmiedv-up80-JP7po2O1C2mvlif_GGShuVC',
//                 'EErTXQIqJyU6GFhvdlSC0nbCFqMEI4ztOa91xovHiBnPvERlnz8-0eyJJ129sBs7v6h5XnknLARise9y'
//             )
//     );

// khach
$paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
                'AbpJAhmhlAtL9skq5v9Mgn-rLdM7YOz_kPb2eHPRzzidkhQDj7eyhuD0H9PHwHwWoPwidjD_GJY8DUXE',
                'EGkXqvBGRA5xcIKTZFNNULABlorOe_IsdS1HQIKpSSIllBeVui_YBvHPFmJwsl39LNWoFX0w_bEB2zdz'
            )
    );


$paypal->setConfig([
    'mode' => ('live'),
]);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- start - cấu hình cơ bản, dùng chung cho tất cả các website chuẩn seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- cần cấu hình linh hoạt -->
    <meta name="description" content="<?= $meta_des ?>">
    <!-- cần cấu hình linh hoạt -->
    <meta name="keywords" content="<?= $meta_key ?>">

    <meta name="cystack-verification" content="ed166d5d3935fc2dd8272f47925a630b"/>
    <!-- cần cấu hình linh hoạt -->
    <title><?= $title ?></title>
    <!-- cần cấu hình linh hoạt -->
    <link rel="icon" href="/images/<?= $rowConfig['icon_web'] ?>" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap-theme.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css'>
    <link rel="stylesheet" href="/plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <script src="/plugin/jquery/jquery-2.0.2.min.js"></script>
    <script src="/plugin/bootstrap/js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/style-vietnamfasttrack.css">
    <!-- end - cấu hình cơ bản, dùng chung cho tất cả các website chuẩn seo -->


</head>

<body style="top: 0px !important;">

<div class="social-button">
    <div class="social-button-content">
       <a href="tel:0889696928" class="call-icon" rel="nofollow">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
          <div class="animated alo-circle"></div>
          <div class="animated alo-circle-fill  "></div>
           <span>Hotline:<br>+84 88 96 96 928</span>
        </a>
        <!-- <a href="sms:0981481368" class="sms">
          <i class="fa fa-weixin" aria-hidden="true"></i>
          <span>SMS: 098 148 1368</span>
        </a> -->
        <!-- <a href="https://www.facebook.com/Ngocthang.net/" class="mes">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
          <span>Nhắn tin Facebook</span>
        </a>
        <a href="http://zalo.me/0966245515" class="zalo">
          <i class="fa fa-commenting-o" aria-hidden="true"></i>
          <span>Zalo: -----------</span>
        </a>-->
        <a href="https://account.viber.com/vi/login" target="_blank" class="viber">
          <i class="fa fa-commenting-o" aria-hidden="true"></i>
          <span>Viber/whatsapp:<br>+84 88 96 96 928</span>
        </a>
    </div>
       
    <a class="user-support">
      <i class="fa fa-user-circle-o" aria-hidden="true"></i>
      <div class="animated alo-circle"></div>
      <div class="animated alo-circle-fill"></div>
    </a>
</div>

    <!--HEADER-->
    <?php include_once dirname(__FILE__).DIR_THEMES."header.php"; ?>
<!--CONTENT-->
<div class="gb-content">
<?php
$name_brcrm = $title;
    if (isset($_GET['page'])){

        $urlAnalytic = $action->getTypePage_byUrl($_GET['page'],$lang);    
        // echo $urlAnalytic;
        switch ($urlAnalytic) {
            case 'tin-tuc':
                include_once dirname(__FILE__).DIR_THEMES."tintuc.php"; break;
            case 'chi-tiet-tin-tuc':
                include_once dirname(__FILE__).DIR_THEMES."chitiet_tintuc.php"; break;
            case 'lien-he':
                include_once dirname(__FILE__).DIR_THEMES."lienhe.php"; break;
            case 'dich-vu':
                include_once dirname(__FILE__).DIR_THEMES."dichvu.php"; break;
            case 'gioi-thieu':
                include_once dirname(__FILE__).DIR_THEMES."gioithieu.php"; break;
            case 'faq':
                include_once dirname(__FILE__).DIR_THEMES."faq.php"; break;
            case 'vietnam-visa':
                include_once dirname(__FILE__).DIR_THEMES."visa.php"; break;
            case 'bookonline':
                include_once dirname(__FILE__).DIR_THEMES."bookonline.php"; break;
            case 'thanh-toan':
                include_once dirname(__FILE__) . DIR_THEMES . "thanh-toan2.php"; break;
            case 'thanh-toan2':
                include_once dirname(__FILE__) . DIR_THEMES . 'thanh-toan2.php';break;
            case 'book-now':
                include_once dirname(__FILE__) . DIR_THEMES . "book_now.php"; break;
            case 'book-now1':
                include_once dirname(__FILE__) . DIR_THEMES . "book_now1.php"; break;
            case 'book-now2':
                include_once dirname(__FILE__) . DIR_THEMES . "book_now2.php";break;
            case 'book-now3':
                include_once dirname(__FILE__) . DIR_THEMES . "book_now3.php";break;
            case 'book-now4':
                include_once dirname(__FILE__) . DIR_THEMES . "book_now4.php";break;
            case 'book-now5':
                include_once dirname(__FILE__) . DIR_THEMES . 'book_now5.php';break;
            case 'check-price':
                include_once dirname(__FILE__) . DIR_THEMES . 'check_price.php';break;

        	case 'newscat_languages':
                include_once dirname(__FILE__).DIR_THEMES."tintuc.php"; break;
            case 'newstag_languages':
                include_once dirname(__FILE__).DIR_THEMES."news-tag.php"; break;
            case 'news_languages':               
                include_once dirname(__FILE__).DIR_THEMES."chitiet_tintuc.php"; break;
            case 'servicecat_languages':
                include_once dirname(__FILE__) . DIR_THEMES . "dichvu.php";break;
            case 'service_languages':
                include_once dirname(__FILE__) . DIR_THEMES . "chitiet_dichvu.php";break;
            case 'page_language':
                include_once dirname(__FILE__) . DIR_THEMES . "page.php";break;
    		case 'productcat_languages':              
                include_once dirname(__FILE__).DIR_THEMES."sanpham.php"; break;
            case 'products':              
                include_once dirname(__FILE__).DIR_THEMES."sanpham.php"; break;
            case 'san-pham':              
                include_once dirname(__FILE__).DIR_THEMES."sanpham.php"; break;
            case 'product_languages':
                include_once dirname(__FILE__).DIR_THEMES."chitiet_sanpham.php"; break;	
            // start - chưa hoàn thiện - url địa chỉ trang website
            case 'cart':               
                include_once dirname(__FILE__).DIR_THEMES."giohang.php"; break;            
            case 'thanh-toan':           
                include_once dirname(__FILE__).DIR_THEMES."thanhtoan.php"; break;
            case 'xac-nhan-don-hang':           
                include_once dirname(__FILE__).DIR_THEMES."xacnhandonhang.php"; break;
            case 'huy-don-hang':           
                include_once dirname(__FILE__).DIR_THEMES."huydonhang.php"; break;
            case 'contact':           
                include_once dirname(__FILE__).DIR_THEMES."lienhe.php"; break;
            // case 'lien-he':
            //     include_once dirname(__FILE__).DIR_THEMES."contact.php"; break;
            case 'search-news':
                include_once dirname(__FILE__) . DIR_THEMES . "search-news.php";break;
            case 'search-product':
                include_once dirname(__FILE__) . DIR_THEMES . "search-product.php";break;
            case 'search-service':
                include_once dirname(__FILE__) . DIR_THEMES . "search-service.php";break;
            case 'register':
                include_once dirname(__FILE__) . DIR_THEMES . "dang-ky.php";break;
            case 'login':
                include_once dirname(__FILE__) . DIR_THEMES . "dang-nhap.php";break;
            case 'logout':
                include_once dirname(__FILE__) . DIR_THEMES . "dang-xuat.php";break;
            case 'forget-pass':
                include_once dirname(__FILE__) . DIR_THEMES . "forget-pass.php";break;
            case 'change-password':
                include_once dirname(__FILE__) .DIR_THEMES . "change-password.php";break;

            case 'payment-online':
                include_once dirname(__FILE__) . DIR_THEMES . 'payment-online.php';break;

            case 'tuan':
                include_once dirname(__FILE__) . DIR_THEMES . "tuan.php";break;
            
            // end - chưa hoàn thiện - url địa chỉ trang website
        }
    }
    else include_once dirname(__FILE__).DIR_THEMES."home.php";
    ?>
</div>

<!--FOOTER-->
<div class="gb-footer">
    <?php include_once dirname(__FILE__).DIR_THEMES."footer.php"; ?>
    <!-- <div id="google_translate_element" style="display: block;"></div> -->
</div> 
<script type="text/javascript" src="/functions/language/lang.js"></script>

<style>
    .social-button{
      display: inline-grid;
        position: fixed;
        bottom: 15px;
        left: 45px;
        min-width: 45px;
        text-align: center;
        z-index: 99999;
    }
    .social-button-content{
      display: inline-grid;   
    }
    .social-button a {padding:8px 0;cursor: pointer;position: relative;}
    .social-button i{
      width: 40px;
        height: 40px;
        background: #43a1f3;
        color: #fff;
        border-radius: 100%;
        font-size: 20px;
        text-align: center;
        line-height: 1.9;
        position: relative;
        z-index: 999;
    }
    .social-button span{
      display: none;
    }
    .alo-circle {
        animation-iteration-count: infinite;
        animation-duration: 1s;
        animation-fill-mode: both;
        animation-name: zoomIn;
        width: 50px;
        height: 50px;
        top: 3px;
        right: -3px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        opacity: .1;
        border-color: #0089B9;
        opacity: .5;
    }
    .alo-circle-fill {
      animation-iteration-count: infinite;
      animation-duration: 1s;
      animation-fill-mode: both;
      animation-name: pulse;
        width: 60px;
        height: 60px;
        top: -2px;
        right: -8px;
        position: absolute;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        background-color: rgba(0, 175, 242, 0.5);
        opacity: .75;
    }
    .call-icon:hover > span, .mes:hover > span, .sms:hover > span, .viber:hover > span{display: block}
    .social-button a span {
        border-radius: 2px;
        text-align: center;
        background: rgb(103, 182, 52);
        padding: 9px;
        display: none;
        width: 180px;
        margin-left: 10px;
        position: absolute;
        color: #ffffff;
        z-index: 999;
        top: 9px;
        left: 40px;
        transition: all 0.2s ease-in-out 0s;
        -moz-animation: headerAnimation 0.7s 1;
        -webkit-animation: headerAnimation 0.7s 1;
        -o-animation: headerAnimation 0.7s 1;
        animation: headerAnimation 0.7s 1;
    }
    @-webkit-keyframes "headerAnimation" {
        0% { margin-top: -70px; }
        100% { margin-top: 0; }
    }
    @keyframes "headerAnimation" {
        0% { margin-top: -70px; }
        100% { margin-top: 0; }
    }
    .social-button a span:before {
      content: "";
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 10px 10px 10px 0;
      border-color: transparent rgb(103, 182, 52) transparent transparent;
      position: absolute;
      left: -10px;
      top: 10px;
    }
  </style>
  <script>
  $(document).ready(function(){
    $('.user-support').click(function(event) {
      $('.social-button-content').slideToggle();
    });
    });
</script>
<!-- phan translate -->
<script type="text/javascript">
    function lang_vn () {
        // alert('lang');
       var lang_current = document.getElementById('lang_current');
        if (lang_current) {
            if (lang_current.value != 'vn') {
                var url = document.getElementById('url_lang');
                if (url) {
                    vn(url.value);
                    // alert(url.value);
                    // window.location.href = '/'+url.value;
                } else {
                    vn('');
                    // location.reload();
                }
            }
        } else {
            vn('');
            // location.reload();
        }    
    }

    function lang_en () {
       var lang_current = document.getElementById('lang_current');
        if (lang_current) {
            if (lang_current.value != 'en') {
                var url = document.getElementById('url_lang');
                if (url) {
                    en(url.value)
                    // alert(url.value);  
                    // window.location.href = '/'+url.value;
                } else {
                    en('');
                    // location.reload();
                }   
            }
        } else {
            en('');
            // location.reload();
        } 
    }

    function vn (url) {
         $.get("/functions/ajax/lang_vn.php", function(){
            // alert("lang vn");
            if (url == '') {
                location.reload();
            } else {
                window.location.href = '/' + url;
            }
        });
    }

    function en (url) {
         $.get("/functions/ajax/lang_en.php", function(){   
            // alert("lang en");
            if (url == '') {
                location.reload();
            } else {
                window.location.href = '/' + url;
            }
        });
    }

    function langs (data) {
        // alert(data.value);
        var lang = data.value;
        if (lang == 'vn') {
            // $.get("/functions/ajax/lang_vn.php", function(){
            //     location.reload();
            // });
            lang_vn();
        } else if (lang == 'en') {
            // $.get("/functions/ajax/lang_en.php", function(){            
            //     location.reload();
            // });
            lang_en();
        }
    }
</script>
<!-- <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
</body>

</html>