<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
<?php 
    function getTypeVisa ($ma) {
        if ($ma == '1') {
            return "1 month single entry";
        }
        if ($ma == '2') {
            return "1 month multiple entry";
        }
        if ($ma == '3') {
            return "3 months single entry";
        }
        if ($ma == '4') {
            return "3 months multiple entry";
        }
        if ($ma == '5') {
            return "6 months multiple entry";
        }
        if ($ma == '6') {
            return "1 year multiple entry";
        }
    }

    function getDuring ($ma) {
        if ($ma == '1') {
            return "1-2 Working days [Business hours Monday to Friday]";
        }
        if ($ma == '2') {
            return "4-8 Working hours (Rush)";
        }
        if ($ma == '3') {
            return "Less 1Hour (Emergency)";
        }
    }

    function getService ($ma) {
        if ($ma == 0) {
            return "None";
        }
        if ($ma == '1') {
            return "Private/confidential Letter (show me in private letter)";
        }
        if ($ma == '2') {
            return "Airport Fasttrack - Normal";
        }
        if ($ma == '3') {
            return "Airport Fasttrack - VIP";
        }
    }

    function getAirportFasttrack ($ma) {
        if ($ma == 0) {
            return "None";
        }
        if ($ma == '1') {
            return "Private/confidential Letter (show me in private letter)";
        }
        if ($ma == '2') {
            return "Airport Fasttrack - Normal";
        }
        if ($ma == '3') {
            return "Airport Fasttrack - VIP";
        }
    }
?>
<style type="text/css">
    #review_order {
        border: 1px solid black;
        padding: 10px;
    }
    #review_order p {
        margin: 10px;
    }
</style>
<div id="Content-Payment">
    <div class="Center-Width">
        <div class="Infor-Width">
            <div class="box_payment">
                <div class="gb-cart-payment">
                    <div class="container">
                        <div class="row" id="Content-mainSlide">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="tabbable-panel">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_default_2" data-toggle="tab">Thanh toán trực tuyến </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_default_2">
                                                <div class="gb-thanhtoan-tructuyen">  
                                                  
                                                    <?php include_once "template/nganluong1.php"; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div id="review_order">
                                    <p>Purpose of visit: <?= ($_SESSION['purpose']=='1') ? 'Tourist Visa' : 'Business Visa' ?></p>
                                    <p>Visa type: <?= getTypeVisa($_SESSION['month']) ?></p>
                                    <p>Check in: <?= $_SESSION['check_in'] ?></p>
                                    <p>Check out: <?= $_SESSION['check_out'] ?></p>
                                    <p>Processing time: <?= getDuring($_SESSION['during']) ?></p>
                                    <p>Arrival airport: <?= $_SESSION['arrival_port'] ?></p>                                   
                                    <p>Extra Service: <?= getService($_SESSION['service']) ?></p>
                                    <p>Airport Fasttrack: <?= getAirportFasttrack($_SESSION['airport_fasttrack']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>