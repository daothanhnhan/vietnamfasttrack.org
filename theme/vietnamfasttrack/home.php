<style type="text/css">
    #box-fix {
        position: fixed;
        bottom: 0px;
        right: 20px;
        padding: 28px 18px;
        border: 1px solid black;
        background-color: white;
        /*z-index: 99999999999;*/
        /*width: 100%;*/
    }
    #box-fix a {
        padding: 10px 23px;
        border-radius: 20px;
        color: white;
        font-weight: bold;
        font-size: 16px;
        text-transform: uppercase;
    }
    #box-fix li {
        display: inline-block;
    }
    @media (max-width: 768px) {
        #box-fix li {
            /*display: block;
            width: 100%;*/
            width: 50%;
            float: left;
            text-align: center;
        }
        #box-fix li:nth-child(1) {
            margin-bottom: 0px;
        }
    }
    @media (max-width: 400px){
        #box-fix a {
        padding: 10px 15px;
        border-radius: 20px;
        color: white;
        font-weight: bold;
        font-size: 16px;
        text-transform: uppercase;
    }
    }
    @media screen and (max-width: 991px){
      #box-fix{
        right: 0px !important;  
        padding: 20px 5px;
        width: 100%;
      }  
      #box-fix a{
        font-size: 13px;
      }
    }
</style>
<!--CONTENT-->
<div class="Content-Main">

    <!--BANNER-->
    <?php include DIR_BANNER."MS_BANNER_VIETNAMFASTTRACK_0001.php";?>

    <!--VỀ CHÚNG TÔI-->
    <div class="container">
        <?php include DIR_INTRODUCE."MS_INTRODUCE_VIETNAMFASTTRACK_0003.php";?>
    </div>
    
    <!--QUESTION AND ANSWER-->
    <?php include DIR_QUESTIONANDANSWER."MS_QUESTIONANDANSWER_VIETNAMFASTTRACK_0001.php";?>

    <!--VỀ CHÚNG TÔI-->
    <div class="container">
        <?php include DIR_INTRODUCE."MS_INTRODUCE_VIETNAMFASTTRACK_0004.php";?>
    </div>

    <!--SIRVICES-->
    <?php include DIR_SERVICE."MS_SERVICE_VIETNAMFASTTRACK_0001.php";?>

<div id="box-fix">
    <div>
        <ul>
            <li><a href="/bookonline" style="background-color: #FAA523;">Order By Email</a></li>
            <li><a href="javascript:void(Tawk_API.toggle())" style="background-color: #00497F;">Online Support</a></li>
        </ul>
    </div>
</div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
Tawk_API.onLoad = function(){
    Tawk_API.hideWidget();
};
Tawk_API.onChatMinimized = function(){
    Tawk_API.hideWidget();
};
Tawk_API.onChatMaximized = function(){
    Tawk_API.showWidget();
};
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a6b15aed7591465c7071d0e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
