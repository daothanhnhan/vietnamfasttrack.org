<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
<?php 
    foreach ($_SESSION['booking_visa_gbvn'] as $k => $v) {
        if ($k < 0) {
            unset($_SESSION['booking_visa_gbvn']);
        }
    }

    if (!isset($_SESSION['booking_visa_gbvn'])) {
        header('location: /book-now');
    }

    if (isset($_POST['previous'])) {
        header('location: /book-now');
    }
    // echo '<pre>';
    // var_dump($_SESSION['booking_visa_gbvn']);die;
    function getAirPort ($code) {
        if ($code == 'DAD') {
            return 'Da Nang (DAD)';
        }
        if ($code == 'HAN') {
            return 'Ha Noi (HAN)';
        }
        if ($code == 'SGN') {
            return 'Ho Chi Minh City (SGN)';
        }
        if ($code == 'CXR') {
            return 'Cam Ranh (CXR)';
        }
    }

    function getService ($code) {
        if ($code == 'arr') {
            return 'Arrival';
        }
        if ($code == 'dep') {
            return 'Departure';
        }
        if ($code == 'cn2f') {
            return 'Connection between any two flights, no buggies';
        }
    }

    function book_now_1 () {
        if (isset($_POST['next'])) {
            // echo '<pre>';
            // var_dump($_POST['type']);
            $count = count($_SESSION['booking_visa_gbvn']) - 1;
            if ($_POST['type'] == 'arr') {
                $_SESSION['booking_visa_gbvn'][$count]['type'] = $_POST['type'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_flight_time'] = $_POST['ARR_flight_time'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_total_passengers'] = $_POST['ARR_total_passengers'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_total_infants'] = $_POST['ARR_total_infants'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_subtotal'] = $_POST['ARR_subtotal'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_flight_date'] = $_POST['ARR_flight_date'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_flight_number'] = $_POST['ARR_flight_number'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_cabin_class_code'] = $_POST['ARR_cabin_class_code'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_signboard_message'] = $_POST['ARR_signboard_message'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_lead_passenger_name'] = $_POST['ARR_lead_passenger_name'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_lead_passenger_mobile'] = $_POST['ARR_lead_passenger_mobile'];
                $_SESSION['booking_visa_gbvn'][$count]['ARR_add_info'] = $_POST['ARR_add_info'];
            }

            if ($_POST['type'] == 'dep') {
                $_SESSION['booking_visa_gbvn'][$count]['type'] = $_POST['type'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_flight_time'] = $_POST['DEP_flight_time'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_total_passengers'] = $_POST['DEP_total_passengers'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_total_infants'] = $_POST['DEP_total_infants'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_subtotal'] = $_POST['DEP_subtotal'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_flight_date'] = $_POST['DEP_flight_date'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_flight_number'] = $_POST['DEP_flight_number'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_cabin_class_code'] = $_POST['DEP_cabin_class_code'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_signboard_message'] = $_POST['DEP_signboard_message'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_lead_passenger_name'] = $_POST['DEP_lead_passenger_name'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_lead_passenger_mobile'] = $_POST['DEP_lead_passenger_mobile'];
                $_SESSION['booking_visa_gbvn'][$count]['DEP_add_info'] = $_POST['DEP_add_info'];
            }
            
            if ($_POST['type'] == 'cn2f') {
                $_SESSION['booking_visa_gbvn'][$count]['type'] = $_POST['type'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_time'] = $_POST['CN2F_A_flight_time'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_date'] = $_POST['CN2F_A_flight_date'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_number'] = $_POST['CN2F_A_flight_number'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_cabin_class_code'] = $_POST['CN2F_A_cabin_class_code'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_time'] = $_POST['CN2F_D_flight_time'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_date'] = $_POST['CN2F_D_flight_date'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_number'] = $_POST['CN2F_D_flight_number'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_cabin_class_code'] = $_POST['CN2F_D_cabin_class_code'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_total_passengers'] = $_POST['CN2F_total_passengers'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_total_infants'] = $_POST['CN2F_total_infants'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_signboard_message'] = $_POST['CN2F_signboard_message'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_lead_passenger_name'] = $_POST['CN2F_lead_passenger_name'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_lead_passenger_mobile'] = $_POST['CN2F_lead_passenger_mobile'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_add_info'] = $_POST['CN2F_add_info'];
                $_SESSION['booking_visa_gbvn'][$count]['CN2F_subtotal'] = $_POST['CN2F_subtotal'];
            }
            // echo '<pre>';
            // var_dump($_SESSION['booking_visa_gbvn']);die;
            header('location: /book-now2');
        }
    }
    book_now_1();

    function getSelectService () {
        $count = count($_SESSION['booking_visa_gbvn']) - 1;
        if (isset($_SESSION['booking_visa_gbvn'][$count]['type'])) {
            return $_SESSION['booking_visa_gbvn'][$count]['type'];
        } else {
            return '';
        }
    }
    $select_service = getSelectService();

    function getCount () {
        $count = count($_SESSION['booking_visa_gbvn']) - 1;
        return $count;
    }
    $count = getCount();
?>
<style type="text/css">
    body {
        font-family: Nunito, sans-serif;
    }
    .nbt-col-center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 200px;
    }

    .nbt-col-center span {
        margin-right: 5px;
    }

    .btn-md {
        background-color: #00497f;
        color: white;
        border-radius: 20px;
        font-weight: bold;
        padding: 8px 25px;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .nbt-breadcrumbs h3 {
        color: #00497f;
        font-size: 30px;
        margin-bottom: 30px;
        font-weight: 400;
    }

    h3 {
        font-family: 'Montserrat', sans-serif;
        margin: 0 0 30px 0;
        clear: both;
        text-transform: none;
        font-weight: normal;
        color: #00497F;
        line-height: 1.2;
        font-size: 2em;
    }

    .order-summary h3 {
        font-size: 16px;
    }

    h3.panel-title {
        color: black;
        font-size: 16px;
        font-weight: 400;
        margin: auto;
    }

    .wizard .current {
        background: #007ACC;
        color: #fff;
    }

    .wizard .current:after {
        border-left-color: #007ACC;
    }

    .wizard {
        color: black;
        display: inline-block;
        
        position: relative;
    }

    .wizard span {
        padding: 3px 7px;
        margin-left: 18px;
        margin-right: 5px;
    }

    .wizard a {
        padding: 10px 12px 10px;
        margin-right: 5px;
        background: #efefef;
        position: relative;
        display: inline-block;
    }

    .wizard a:after {
        width: 0;
        height: 0;
        border-top: 20px inset transparent;
        border-bottom: 20px inset transparent;
        border-left: 20px solid #efefef;
        position: absolute;
        content: "";
        top: 0;
        right: -20px;
        z-index: 2;
    }

    .wizard a:before {
        width: 0;
        height: 0;
        border-top: 20px inset transparent;
        border-bottom: 20px inset transparent;
        border-left: 20px solid #fff;
        position: absolute;
        content: "";
        top: 0;
        left: 0;
    }

    .category-submit-form {
        margin-top: 20px;
    }

    .category-submit-form h3#country-title {
        font-family: 'Montserrat', sans-serif;
        margin: 0 0 30px 0;
        clear: both;
        text-transform: none;
        font-weight: normal;
        color: #00497F;
        line-height: 1.2;
        font-size: 2em;
    }

    .category-submit-form label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .category-submit-form #airport_code {
        max-width: 30em;
    }

    .category-button-wrap {
        margin-top: 20px;
        margin-bottom: 30px;
    }

    .category-button-wrap button {
        margin-bottom: 20px;
        padding: 8px 25px;
        background-color: #FAA523;
        border-radius: 20px;
    }

    .category-button-wrap h3 {
        margin-top: 20px;
        margin-bottom: 30px;
        font-size: 24px;
        font-weight: 500;
    }

    .category-button-wrap #limousine, .category-button-wrap #lounge {
        color: white;
    }

    #nbt_booking_form {
        /*margin-top: 20px;*/
    }

    p {
        line-height: 1.6;
        margin-bottom: 20px;
    }

    #core_service_code {
        height: 40px;
        width: 100%;
    }
    .core-service-form {
        text-align: justify;
        padding: 10px 20px;
    }
    .core-service-form img {
        width: 100%;
    }
    .row {
        width: 100%;
        margin: auto;
    }
    .nbt-help-popover {
        display: none;
    }
    .booking-page-controls div.col-ms-6 {
        width: 20%;
        display: inline-block;
    }
    #nbt-service-next-btn {
        background-color: #228b22;
    }
</style>
<div class="container">
    <div class="row nbt-header-navigation">
        <div class="col-sm-6">
            <div class="nbt-col-center top-action-button">
                <a href="/" class="btn btn-md nbt-start-over-btn"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Go back to the start</a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="nbt-col-center top-action-button addFocalScopeChat">
                <a href="javascript:void(Tawk_API.toggle())" class="btn btn-md nbt-chat-online-btn"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>Chat with an agent</a>
            </div>
        </div>
    </div>
           
	<div class="container_inner default_template_holder clearfix page_container_inner" style="margin-top: 0 !important;">

	<div class="nbt-page-structure container"><div class="nbt-breadcrumbs">
<h3>Booking progress</h3>
<div class="wizard">
	<a><span class="badge">1</span>Category</a>
	<a class="current"><span class="badge badge-inverse">2</span>Service</a>
	<a><span class="badge">3</span>Add-on</a>
	<a><span class="badge">4</span>Review</a>
	<a><span class="badge">5</span>Booker Details</a>
	<a><span class="badge">6</span>Payment</a>

</div>
</div>
<!-- <form id="nbt_booking_form" method="POST" action=""> -->
<input type="hidden" name="wp_session_20170102" value="769cd04a912a4730259979f6c7525216||1527916494||1527916494">
<div class="row">
<div class="col-md-8">
<div class="row">
<script type="text/javascript">
var core_service_rates_arr = [{"core_service_code":"ARR","airport_code":"DAD","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"8","cost":"699.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"9","cost":"749.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"1","cost":"219.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"2","cost":"349.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"3","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"4","cost":"599.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"5","cost":"719.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"6","cost":"839.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"7","cost":"949.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"8","cost":"1029.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"9","cost":"1169.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"8","cost":"689.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"9","cost":"749.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"}]; 

var core_service_rates_arr1 = [{"core_service_code":"ARR","airport_code":"HAN","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"8","cost":"689.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"HAN","units":"9","cost":"679.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"1","cost":"219.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"2","cost":"349.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"3","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"4","cost":"599.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"5","cost":"719.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"6","cost":"839.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"7","cost":"949.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"8","cost":"1059.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"HAN","units":"9","cost":"1169.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"8","cost":"689.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"HAN","units":"9","cost":"749.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"}]; 

var core_service_rates_arr2 = [{"core_service_code":"ARR","airport_code":"SGN","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"8","cost":"689.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"SGN","units":"9","cost":"749.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"1","cost":"219.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"2","cost":"349.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"3","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"4","cost":"599.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"5","cost":"719.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"6","cost":"839.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"7","cost":"949.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"8","cost":"1059.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"SGN","units":"9","cost":"1169.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"8","cost":"689.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"SGN","units":"9","cost":"749.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"}]; 

var core_service_rates_arr3 = [{"core_service_code":"ARR","airport_code":"DAD","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"8","cost":"699.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"ARR","airport_code":"DAD","units":"9","cost":"749.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"1","cost":"219.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"2","cost":"349.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"3","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"4","cost":"599.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"5","cost":"719.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"6","cost":"839.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"7","cost":"949.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"8","cost":"1029.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"CN2F","airport_code":"DAD","units":"9","cost":"1169.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"1","cost":"149.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"2","cost":"239.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"3","cost":"319.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"4","cost":"399.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"5","cost":"479.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"6","cost":"549.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"7","cost":"619.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"8","cost":"689.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"},{"core_service_code":"DEP","airport_code":"DAD","units":"9","cost":"749.0000","ccy":"USD","out_of_hours_amt":"20.0000","out_of_hours_amt_type":"F","unit_type_code":"SI","rate_type_code":"U","service_category_code":"MNA"}]; 
</script>
<script type="text/javascript">
    // alert(nbt_bookingObj.order_arr[0].order.order_id);
    // alert(core_service_rates_arr[11].cost);
    // alert(core_service_rates_arr[0].units);
    // alert(core_service_rates_arr[22].core_service_code);
    // alert(core_service_rates_arr[0].out_of_hours_amt);
</script>
<input type="hidden" name="country_code" value="VNM">
<input type="hidden" name="booking_sequence_id" value="2">
<input type="hidden" name="order_index_no" value="0">
<?php if ($lang == 'vn') { ?>
<h3>Select the service you want and fill in the details</h3>
<p>If you want, you can book 2 services (eg. an arrival + a departure; or 2 connections).
    Order the first service. At the <i>"review your booking"</i> page click "book another service"</p>
<?php } else { ?>
<h3>Select the service you want and fill in the details</h3>
<p>如果您愿意，您可以预订2项服务（例如抵达+出发;或2个连接）。
     订购第一项服务。 在<i>“查看您的预订”</i>页面点击“预订其他服务”</p>
<?php } ?>

<div class="panel-group  nbt-service-selection" id="accordion">
 <select name="core_service_code" id="core_service_code" onchange="selectService(this)">
     <option value="" <?= ($select_service=='') ? 'selected' : '' ?> >select service</option>
     <option value="ARR" <?= ($select_service=='arr') ? 'selected' : '' ?> >Arrival</option>
     <option value="DEP" <?= ($select_service=='dep') ? 'selected' : '' ?> >Departure</option>
     <option value="CN2F" <?= ($select_service=='cn2f') ? 'selected' : '' ?>>Connection between any two flights, no buggies</option> </select>
 	<div class="panel panel-default nbt-core-service-form nbt-core-service-hidden" id="nbt_core_service_ARR" style="display: <?= ($select_service=='arr') ? 'block' : 'none' ?>;">
		<div class="panel-heading" data-core_service_code="ARR">
			<span class="panel-title">
				 Arrival			</span>
		</div>

<form action="" method="post" id="arr">
    <input type="hidden" name="type" value="arr">
        <div class="row">
            <div class="core-service-form">
<div class="form-horizontal" data-core-service-code="ARR">
	            <div class="form-group" id="nbt-service-description-display-area">
                <div class="row nbt-no-horizontal-margin">
                    <div class="col-md-12">
                        <img class="nbt-description-img" src="https://groundbooker.net/wordpress/wp-content/uploads/2018/01/AAA.jpg">
                    </div>
                </div>
                <div class="row nbt-no-horizontal-margin">
                    <?php if ($lang == 'vn') { ?>
                    <div class="col-md-12">
                        <div class=""><p><b>Service description.</b> For Arrival we meet passengers in or at the end of the long walkway into the terminal building (or if health checks are in place, after the medical check point just before the immigration hall).  We assist passengers obtain their Visa on Arrival, if one is needed, and we expedite them pass through immigration passport stamping, by using the Diplomatic, Crew, or the fastest line available.  We provide baggage trolleys and we assist passengers identify and collect their checked bags, and then we escort them through customs check.  Finally, we locate their driver, tour guide, family member or hotel rep and bid them farewell.</p>  

<p><b>Service notes for this airport.</b>  There is a surcharge automatically applied to bookings which have a scheduled arrival flight time falling in the designated late night/early morning time period.   An electric buggy kart is not available.  Passenger passport data is required for each traveller before final confirmation.  Greeters can assist with a reasonable number of normal size & weight bags.  Baggage assistance can be arranged for an extra charge. Chauffeur car services are available.  Infants (aged under 24 months) are assisted free and are not counted for purpose of charging.</p></div>
                    </div>
                    <?php } else { ?>
                    <div class="col-md-12">
                        <div class=""><p> <b>服务说明。</b>抵达时，我们会在长走道的末端或末端会见乘客进入航站楼（或者如果健康检查到位，则在入境大厅前的医疗检查站之后） ）。我们协助乘客在抵达时获得签证（如果需要的话），我们通过使用外交，船员或最快的航线加快他们通过移民护照盖章。我们提供行李手推车，我们协助乘客识别和领取托运行李，然后我们通过海关检查护送他们。最后，我们找到他们的司机，导游，家庭成员或酒店代表并告别他们。</p>

<p> <b>此机场的服务说明。</b>预定抵达航班时间在指定的深夜/清晨时间段内，预订将自动收取附加费。没有电动车的卡丁车。在最终确认之前，每位旅客都需要乘客护照数据。 Greeters可以帮助合理数量的正常尺寸和重量的袋子。可安排行李协助，但需额外收费。提供司机汽车服务。婴儿（24个月以下）免费获得帮助，不计入充电目的。</p></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            	<div class="form-group">
		<label for="ARR_flight_time" class="col-sm-6 control-label">Flight arrival time hh:mm</label>
		<div class="col-sm-5">
            <div class="form-group nbt-no-horizontal-margin">
                <div class='input-group date custom-time-picker' id="ARR_flight_time_picker">
			        <input name="ARR_flight_time" id="ARR_flight_time" type="text" class="form-control cost-control lead-control" placeholder="e.g. 22:15" value="<?= (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_flight_time'])) ? $_SESSION['booking_visa_gbvn'][$count]['ARR_flight_time'] : '02:00' ?>">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the time that the flight is scheduled to arrive or to depart" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
		<label for="ARR_total_passengers" class="col-sm-6 control-label">Total number of passengers<br>(including all children)</label>
		<div class="col-sm-5">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_total_passengers'])) {
                $ARR_total_passengers = $_SESSION['booking_visa_gbvn'][$count]['ARR_total_passengers'];
            } else {
                $ARR_total_passengers = 0;
            }
        ?>
			<select name="ARR_total_passengers" id="ARR_total_passengers" class="form-control cost-control" onchange="numPersonArr(this)">
			<option value="0" <?= ($ARR_total_passengers==0) ? 'selected' : '' ?> >0</option>
            <option value="1" <?= ($ARR_total_passengers==1) ? 'selected' : '' ?> >1</option>
            <option value="2" <?= ($ARR_total_passengers==2) ? 'selected' : '' ?> >2</option>
            <option value="3" <?= ($ARR_total_passengers==3) ? 'selected' : '' ?> >3</option>
            <option value="4" <?= ($ARR_total_passengers==4) ? 'selected' : '' ?> >4</option>
            <option value="5" <?= ($ARR_total_passengers==5) ? 'selected' : '' ?> >5</option>
            <option value="6" <?= ($ARR_total_passengers==6) ? 'selected' : '' ?> >6</option>
            <option value="7" <?= ($ARR_total_passengers==7) ? 'selected' : '' ?> >7</option>
            <option value="8" <?= ($ARR_total_passengers==8) ? 'selected' : '' ?> >8</option>
            <option value="9" <?= ($ARR_total_passengers==9) ? 'selected' : '' ?> >9</option>
            			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the total number of passengers (including any infants under 24 months)" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_total_infants'])) {
                $ARR_total_infants = $_SESSION['booking_visa_gbvn'][$count]['ARR_total_infants'];
            } else {
                $ARR_total_infants = 0;
            }
        ?>
	<div class="form-group">
		<label for="ARR_total_infants" class="col-sm-6 control-label">Number of children under 24 months</label>
		<div class="col-sm-5">
			<select name="ARR_total_infants" id="ARR_total_infants" class="form-control cost-control cost-control-optional" onchange="numChildrenArr(this)">
			<option value="0" <?= ($ARR_total_infants==0) ? 'selected' : '' ?> >0</option>
            <option value="1" <?= ($ARR_total_infants==1) ? 'selected' : '' ?> >1</option>
            <option value="2" <?= ($ARR_total_infants==2) ? 'selected' : '' ?> >2</option>			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the number of infants, who are aged under 24 months at the date of service" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_subtotal'])) {
                $ARR_subtotal = number_format($_SESSION['booking_visa_gbvn'][$count]['ARR_subtotal'], 2);
            } else {
                $ARR_subtotal = '0.00';
            }
        ?>
		<label for="ARR_subtotal" class="col-sm-6 control-label">Price USD</label>
		<div class="col-sm-5">
			<input name="ARR_subtotal" id="ARR_subtotal" type="text" class="form-control" value="<?= $ARR_subtotal ?>" readonly>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the price of the main service you have selected (before any optional add-ons)" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_flight_date'])) {
                $ARR_flight_date = date('Y-m-d', strtotime($_SESSION['booking_visa_gbvn'][$count]['ARR_flight_date']));
            } else {
                $ARR_flight_date = date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d'))));
            }
        ?>
		<label for="ARR_flight_date" class="col-sm-6 control-label">Flight arrival date</label>
		<div class="col-sm-5">
			<input name="ARR_flight_date" type="date" class="form-control lead-control"  data-provide="datepicker" value="<?= $ARR_flight_date ?>">
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the date ( month/day/year ) on which the flight arrives or departs" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_flight_number'])) {
                $ARR_flight_number = $_SESSION['booking_visa_gbvn'][$count]['ARR_flight_number'];
            } else {
                $ARR_flight_number = '';
            }
        ?>
		<label for="ARR_flight_number" class="col-sm-6 control-label">Airline flight number</label>
		<div class="col-sm-5">
			<input name="ARR_flight_number" type="text" class="form-control" placeholder="e.g. SG123" value="<?= $ARR_flight_number ?>" maxlength="20" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the flight number - the airline code eg BA, CX, SQ + a number eg 123, 2345, 008" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_cabin_class_code'])) {
                $ARR_cabin_class_code = $_SESSION['booking_visa_gbvn'][$count]['ARR_cabin_class_code'];
            } else {
                $ARR_cabin_class_code = 'J';
            }
        ?>
		<label for="ARR_cabin_class_code" class="col-sm-6 control-label">Cabin class</label>
		<div class="col-sm-5">
			<select name="ARR_cabin_class_code" class="form-control">
			<option value="J" <?= ($ARR_cabin_class_code=='J') ? 'selected' : '' ?> >Business Class Cabin</option>
            <option value="Y" <?= ($ARR_cabin_class_code=='Y') ? 'selected' : '' ?> >Economy Class Cabin</option>
            <option value="F" <?= ($ARR_cabin_class_code=='F') ? 'selected' : '' ?> >First Class Cabin</option>
            <option value="M" <?= ($ARR_cabin_class_code=='M') ? 'selected' : '' ?> >Mixed of Cabins</option>
            <option value="W" <?= ($ARR_cabin_class_code=='W') ? 'selected' : '' ?> >Premium Economy Cabin</option>			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the cabin class in which the passengers is likely to be travelling " title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_signboard_message'])) {
                $ARR_signboard_message = $_SESSION['booking_visa_gbvn'][$count]['ARR_signboard_message'];
            } else {
                $ARR_signboard_message = '';
            }
        ?>
		<label for="ARR_signboard_message" class="col-sm-6 control-label">Signboard message should read</label>
		<div class="col-sm-5">
			<input name="ARR_signboard_message" type="text" class="form-control" value="<?= $ARR_signboard_message ?>" maxlength="255">
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the name, or code word that is to be displayed on the welcome signage" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_lead_passenger_name'])) {
                $ARR_lead_passenger_name = $_SESSION['booking_visa_gbvn'][$count]['ARR_lead_passenger_name'];
            } else {
                $ARR_lead_passenger_name = '';
            }
        ?>
		<label for="ARR_lead_passenger_name" class="col-sm-6 control-label">Lead passenger name (as in passport)</label>
		<div class="col-sm-5">
			<input name="ARR_lead_passenger_name" type="text" class="form-control" value="<?= $ARR_lead_passenger_name ?>" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the name of the principal passenger: we will verify it against their passport" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_lead_passenger_mobile'])) {
                $ARR_lead_passenger_mobile = $_SESSION['booking_visa_gbvn'][$count]['ARR_lead_passenger_mobile'];
            } else {
                $ARR_lead_passenger_mobile = '';
            }
        ?>
		<label for="ARR_lead_passenger_mobile" class="col-sm-6 control-label">Lead passenger mobile</label>
		<div class="col-sm-5">
			<input name="ARR_lead_passenger_mobile" type="tel" class="form-control" value="<?= $ARR_lead_passenger_mobile ?>" pattern="^[\s()+-]*([0-9][\s()+-]*){6,20}$" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the mobile cell number of a passenger or someone travelling with the group " title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['ARR_add_info'])) {
                $ARR_add_info = $_SESSION['booking_visa_gbvn'][$count]['ARR_add_info'];
            } else {
                $ARR_add_info = '';
            }
        ?>
		<label for="ARR_add_info" class="col-sm-6 control-label">Any additional information</label>
		<div class="col-sm-5">
			<textarea name="ARR_add_info" class="form-control" maxlength="1512" rows="6"><?= $ARR_add_info ?></textarea>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This space is for notes, requests and other information we may need to know" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	
	
</div></div>        </div>

</form>

	</div>
 	<div class="panel panel-default nbt-core-service-form nbt-core-service-hidden" id="nbt_core_service_DEP" style="display: <?= ($select_service=='dep') ? 'block' : 'none' ?>;">
		<div class="panel-heading" data-core_service_code="DEP">
			<span class="panel-title">
				 Departure			</span>
		</div>
<form action="" method="post" id="dep">
    <input type="hidden" name="type" value="dep">
        <div class="row">
            <div class="core-service-form">
<div class="form-horizontal" data-core-service-code="DEP">
	            <div class="form-group" id="nbt-service-description-display-area">
                <div class="row nbt-no-horizontal-margin">
                    <div class="col-md-12">
                        <img class="nbt-description-img" src="https://groundbooker.net/wordpress/wp-content/uploads/2018/01/AAA.jpg">
                    </div>
                </div>
                <div class="row nbt-no-horizontal-margin">
                    <?php if ($lang == 'vn') { ?>
                    <div class="col-md-12">
                        <div class=""><p><b>Service description.</b> For Departure we meet passengers at the kerbside (if we have their driver cell number). The service start time is normally two hours before the scheduled flight departure time. We provide baggage trolleys and assist passengers move their bags from the vehicle to the check in area. At the check in area we help them check in their bags, request their desired seat and obtain their boarding pass.  We expedite them through immigration passport stamping by using the Diplomatic, Crew, or the fastest line available.  We escort passengers to their airline lounge and at boarding time we return to the lounge and escort them to the gate, and bid them farewell.</p>  

<p><b>Service notes for this airport.</b>  There is a surcharge automatically applied to bookings which have a scheduled departure flight time falling in the designated late night/early morning time period.  An electric buggy kart is not available.  Passenger passport data is required for each traveller before final confirmation.  Lounge access (for 2,3 or 4 hours) before departure may be purchased if required as an extra.  For departure, the greeter may return to lounge at boarding time, providing not more than two hours have elapsed since the service started. Greeters can assist with a reasonable number of normal size & weight bags.  Baggage assistance can be arranged for an extra charge. Chauffeur car services are available.  Infants (aged under 24 months) are assisted free and are not counted for purpose of charging.</p></div>
                    </div>
                    <?php } else { ?>
                    <div class="col-md-12">
                        <div class=""><p> <b>服务说明。</b>出发时，我们会在路边遇见乘客（如果我们有司机牢房号码）。服务开始时间通常是预定航班起飞时间前两小时。我们提供行李手推车并协助乘客将行李从车辆移至登记区域。在办理登机手续的区域，我们帮助他们办理行李托运，申请所需的座位并获得登机牌。我们通过使用外交，船员或最快线路的移民护照加盖来加速他们。我们护送乘客到他们的航空公司休息室，在登机时我们回到休息室并护送他们到门口，并告别他们。</p>

<p> <b>此机场的服务说明。</b>预定的出发航班时间在指定的深夜/清晨时间段内，预订将自动收取附加费。没有电动车的卡丁车。在最终确认之前，每位旅客都需要乘客护照数据。如果需要额外的话，可以在出发前使用休息室（2,3或4小时）。出发时，迎宾员可在登机时返回休息室，自服务开始起不超过两小时。 Greeters可以帮助合理数量的正常尺寸和重量的袋子。可安排行李协助，但需额外收费。提供司机汽车服务。婴儿（24个月以下）免费获得帮助，不计入充电目的。</p></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_flight_time'])) {
                $DEP_flight_time = $_SESSION['booking_visa_gbvn'][$count]['DEP_flight_time'];
            } else {
                $DEP_flight_time = '02:00';
            }
        ?>
		<label for="DEP_flight_time" class="col-sm-6 control-label">Flight departure time hh:mm</label>
		<div class="col-sm-5">
            <div class="form-group nbt-no-horizontal-margin">
                <div class='input-group date custom-time-picker' id="DEP_flight_time_picker">
			        <input name="DEP_flight_time" id="DEP_flight_time" type="text" class="form-control cost-control lead-control" placeholder="e.g. 22:15" value="<?= $DEP_flight_time ?>">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the time that the flight is scheduled to arrive or to depart" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_total_passengers'])) {
                $DEP_total_passengers = $_SESSION['booking_visa_gbvn'][$count]['DEP_total_passengers'];
            } else {
                $DEP_total_passengers = 0;
            }
        ?>
		<label for="DEP_total_passengers" class="col-sm-6 control-label">Total number of passengers<br>(including all children)</label>
		<div class="col-sm-5">
			<select name="DEP_total_passengers" id="DEP_total_passengers" class="form-control cost-control" onchange="numPersonDep(this)">
			<option value="0" <?= ($DEP_total_passengers==0) ? 'selected' : '' ?> >0</option>
            <option value="1" <?= ($DEP_total_passengers==1) ? 'selected' : '' ?> >1</option>
            <option value="2" <?= ($DEP_total_passengers==2) ? 'selected' : '' ?> >2</option>
            <option value="3" <?= ($DEP_total_passengers==3) ? 'selected' : '' ?> >3</option>
            <option value="4" <?= ($DEP_total_passengers==4) ? 'selected' : '' ?> >4</option>
            <option value="5" <?= ($DEP_total_passengers==5) ? 'selected' : '' ?> >5</option>
            <option value="6" <?= ($DEP_total_passengers==6) ? 'selected' : '' ?> >6</option>
            <option value="7" <?= ($DEP_total_passengers==7) ? 'selected' : '' ?> >7</option>
            <option value="8" <?= ($DEP_total_passengers==8) ? 'selected' : '' ?> >8</option>
            <option value="9" <?= ($DEP_total_passengers==9) ? 'selected' : '' ?> >9</option>			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the total number of passengers (including any infants under 24 months)" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_total_infants'])) {
                $DEP_total_infants = $_SESSION['booking_visa_gbvn'][$count]['DEP_total_infants'];
            } else {
                $DEP_total_infants = 0;
            }
        ?>
		<label for="DEP_total_infants" class="col-sm-6 control-label">Number of children under 24 months</label>
		<div class="col-sm-5">
			<select name="DEP_total_infants" id="DEP_total_infants" class="form-control cost-control cost-control-optional" onchange="numChildrenDep(this)">
			<option value="0" <?= ($DEP_total_infants==0) ? 'selected' : '' ?> >0</option>
            <option value="1" <?= ($DEP_total_infants==1) ? 'selected' : '' ?> >1</option>
            <option value="2" <?= ($DEP_total_infants==2) ? 'selected' : '' ?> >2</option>			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the number of infants, who are aged under 24 months at the date of service" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_subtotal'])) {
                $DEP_subtotal = number_format($_SESSION['booking_visa_gbvn'][$count]['DEP_subtotal'], 2);
            } else {
                $DEP_subtotal = '0.00';
            }
        ?>
		<label for="DEP_subtotal" class="col-sm-6 control-label">Price USD</label>
		<div class="col-sm-5">
			<input name="DEP_subtotal" id="DEP_subtotal" type="text" class="form-control" value="<?= $DEP_subtotal ?>" readonly>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the price of the main service you have selected (before any optional add-ons)" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_flight_date'])) {
                $DEP_flight_date = date('Y-m-d', strtotime($_SESSION['booking_visa_gbvn'][$count]['DEP_flight_date']));
            } else {
                $DEP_flight_date = date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d'))));
            }
        ?>
		<label for="DEP_flight_date" class="col-sm-6 control-label">Flight departure date</label>
		<div class="col-sm-5">
			<input name="DEP_flight_date" type="date" class="form-control lead-control"  data-provide="datepicker" value="<?= $DEP_flight_date ?>">
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the date ( month/day/year ) on which the flight arrives or departs" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_flight_number'])) {
                $DEP_flight_number = $_SESSION['booking_visa_gbvn'][$count]['DEP_flight_number'];
            } else {
                $DEP_flight_number = '';
            }
        ?>
		<label for="DEP_flight_number" class="col-sm-6 control-label">Airline flight number</label>
		<div class="col-sm-5">
			<input name="DEP_flight_number" type="text" class="form-control" placeholder="e.g. SG123" value="<?= $DEP_flight_number ?>" maxlength="20" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the flight number - the airline code eg BA, CX, SQ + a number eg 123, 2345, 008" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_cabin_class_code'])) {
                $DEP_cabin_class_code = $_SESSION['booking_visa_gbvn'][$count]['DEP_cabin_class_code'];
            } else {
                $DEP_cabin_class_code = 'J';
            }
        ?>
		<label for="DEP_cabin_class_code" class="col-sm-6 control-label">Cabin class</label>
		<div class="col-sm-5">
			<select name="DEP_cabin_class_code" class="form-control">
			<option value="J" <?= ($DEP_cabin_class_code=='J') ? 'selected' : '' ?> >Business Class Cabin</option>
            <option value="Y" <?= ($DEP_cabin_class_code=='Y') ? 'selected' : '' ?> >Economy Class Cabin</option>
            <option value="F" <?= ($DEP_cabin_class_code=='F') ? 'selected' : '' ?> >First Class Cabin</option>
            <option value="M" <?= ($DEP_cabin_class_code=='M') ? 'selected' : '' ?> >Mixed of Cabins</option>
            <option value="W" <?= ($DEP_cabin_class_code=='W') ? 'selected' : '' ?> >Premium Economy Cabin</option>			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the cabin class in which the passengers is likely to be travelling " title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_signboard_message'])) {
                $DEP_signboard_message = $_SESSION['booking_visa_gbvn'][$count]['DEP_signboard_message'];
            } else {
                $DEP_signboard_message = '';
            }
        ?>
		<label for="DEP_signboard_message" class="col-sm-6 control-label">Signboard message should read</label>
		<div class="col-sm-5">
			<input name="DEP_signboard_message" type="text" class="form-control" value="<?= $DEP_signboard_message ?>" maxlength="255" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the name, or code word that is to be displayed on the welcome signage" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_lead_passenger_name'])) {
                $DEP_lead_passenger_name = $_SESSION['booking_visa_gbvn'][$count]['DEP_lead_passenger_name'];
            } else {
                $DEP_lead_passenger_name = '';
            }
        ?>
		<label for="DEP_lead_passenger_name" class="col-sm-6 control-label">Lead passenger name (as in passport)</label>
		<div class="col-sm-5">
			<input name="DEP_lead_passenger_name" type="text" class="form-control" value="<?= $DEP_lead_passenger_name ?>" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the name of the principal passenger: we will verify it against their passport" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_lead_passenger_mobile'])) {
                $DEP_lead_passenger_mobile = $_SESSION['booking_visa_gbvn'][$count]['DEP_lead_passenger_mobile'];
            } else {
                $DEP_lead_passenger_mobile = '';
            }
        ?>
		<label for="DEP_lead_passenger_mobile" class="col-sm-6 control-label">Lead passenger mobile</label>
		<div class="col-sm-5">
			<input name="DEP_lead_passenger_mobile" type="tel" class="form-control" value="<?= $DEP_lead_passenger_mobile ?>" pattern="^[\s()+-]*([0-9][\s()+-]*){6,20}$" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the mobile cell number of a passenger or someone travelling with the group " title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['DEP_add_info'])) {
                $DEP_add_info = $_SESSION['booking_visa_gbvn'][$count]['DEP_add_info'];
            } else {
                $DEP_add_info = '';
            }
        ?>
		<label for="DEP_add_info" class="col-sm-6 control-label">Any additional information</label>
		<div class="col-sm-5">
			<textarea name="DEP_add_info" class="form-control" maxlength="512" rows="6"><?= $DEP_add_info ?></textarea>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This space is for notes, requests and other information we may need to know" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	
	
</div></div>        </div>

</form>

	</div>
 	<div class="panel panel-default nbt-core-service-form nbt-core-service-hidden" id="nbt_core_service_CN2F" style="display: <?= ($select_service=='cn2f') ? 'block' : 'none' ?>;">
		<div class="panel-heading" data-core_service_code="CN2F">
			<span class="panel-title">
				 Connection between any two flights, no buggies			</span>
		</div>

<form action="" method="post" id="cn2f">
    <input type="hidden" name="type" value="cn2f">
        <div class="row">
            <div class="core-service-form">
<div class="form-horizontal" data-core-service-code="CN2F">
            <div class="form-group" id="nbt-service-description-display-area">
                <div class="row nbt-no-horizontal-margin">
                    <div class="col-md-12">
                        <img class="nbt-description-img" src="https://groundbooker.net/wordpress/wp-content/uploads/2018/01/AAA.jpg">
                    </div>
                </div>
                <div class="row nbt-no-horizontal-margin">
                    <?php if ($lang == 'vn') { ?>
                    <div class="col-md-12">
                        <div class=""><p><b>Service Description.</b>  For Connections we meet passengers  at the end of the long walkway into the arrival terminal building (or if health checks are in place, after the medical check point just before the immigration hall).  We assist and expedite passengers obtain (if required) their Visa on Arrival, their immigration stamp and their boarding passes.  If required, we assist and accompany passengers to change terminals, and we provide baggage trolleys and assist passengers identify and collect their checked bags. In the departure terminal we escort passengers through any check in, security or border controls and escort them to their airline lounge.  At boarding time we return to the lounge and escort them to the gate, and bid them farewell.  Lounge access (for 2,3 or 4 hours) before departure may be purchased if required as an extra service</p>

<p><b>Service notes for this airport.</b>  There is a surcharge automatically applied to bookings which have a scheduled arrival or departure flight time falling in the designated late night/early morning time period. An electric buggy kart is not available here.  Passenger passport data will be required for each traveller before final confirmation.  Greeters can assist with a reasonable number of normal size & weight bags.  Baggage assistance can be arranged for an extra charge.  Infants (aged under 24 months) are assisted free and are not counted for purpose of charging.</p></div>
                    </div>
                    <?php } else { ?>
                    <div class="col-md-12">
                        <div class=""><p> <b>服务说明。</b>对于连接，我们在长走道尽头遇到乘客进入抵达航站楼（或者如果健康检查到位，则在移民大厅前的医疗检查点之后） 。我们协助并加快乘客（如果需要）获得抵达签证，移民印章和登机牌。如果需要，我们协助并陪同乘客更换码头，我们提供行李手推车并协助乘客识别和领取托运行李。在出发终端，我们护送乘客通过任何登机手续，安全或边境控制，并护送他们到他们的航空公司休息室。在登机时，我们返回休息室并护送他们到大门，告别他们。如果需要，可以在出发前使用休息室（2,3或4小时）作为额外服务</p>

<p> <b>此机场的服务说明。</b>预定抵达或离开航班时间在指定深夜/清晨时间段内的预订将自动收取附加费。这里没有电动卡车卡丁车。在最终确认之前，每位旅客都需要乘客护照数据。 Greeters可以帮助合理数量的正常尺寸和重量的袋子。可安排行李协助，但需额外收费。婴儿（24个月以下）免费获得帮助，不计入充电目的。</p></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_time'])) {
                $CN2F_A_flight_time = $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_time'];
            } else {
                $CN2F_A_flight_time = '02:00';
            }
        ?>
			<label for="CN2F_A_flight_time" class="col-sm-6 control-label">Flight arrival time hh:mm</label>
			<div class="col-sm-5">
                <div class="form-group nbt-no-horizontal-margin">
                    <div class='input-group date custom-time-picker' id="CN2F_A_flight_time_picker">
				        <input name="CN2F_A_flight_time" id="CN2F_A_flight_time" type="text" class="form-control cost-control lead-control" placeholder="e.g. 22:15" value="<?= $CN2F_A_flight_time ?>" >
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the time that the flight is scheduled to arrive or to depart" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>
		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_date'])) {
                $CN2F_A_flight_date = $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_date'];
            } else {
                $CN2F_A_flight_date = date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d'))));
            }
        ?>
			<label for="CN2F_A_flight_date" class="col-sm-6 control-label">Flight arrival date</label>
			<div class="col-sm-5">
				<input name="CN2F_A_flight_date" type="date" class="form-control  lead-control" data-provide="datepicker" value="<?= $CN2F_A_flight_date ?>">
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the date ( month/day/year ) on which the flight arrives or departs" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>
		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_number'])) {
                $CN2F_A_flight_number = $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_flight_number'];
            } else {
                $CN2F_A_flight_number = '';
            }
        ?>
			<label for="CN2F_A_flight_number" class="col-sm-6 control-label">Airline flight number</label>
			<div class="col-sm-5">
				<input name="CN2F_A_flight_number" type="text" class="form-control" placeholder="e.g. SG123" value="<?= $CN2F_A_flight_number ?>" maxlength="20" required>
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the flight number - the airline code eg BA, CX, SQ + a number eg 123, 2345, 008" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>
		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_A_cabin_class_code'])) {
                $CN2F_A_cabin_class_code = $_SESSION['booking_visa_gbvn'][$count]['CN2F_A_cabin_class_code'];
            } else {
                $CN2F_A_cabin_class_code = 'J';
            }
        ?>
			<label for="CN2F_A_cabin_class_code" class="col-sm-6 control-label">Cabin class</label>
			<div class="col-sm-5">
				<select name="CN2F_A_cabin_class_code" class="form-control">
				<option value="J" <?= ($CN2F_A_cabin_class_code=='J') ? 'selected' : '' ?> >Business Class Cabin</option>
                <option value="Y" <?= ($CN2F_A_cabin_class_code=='Y') ? 'selected' : '' ?> >Economy Class Cabin</option>
                <option value="F" <?= ($CN2F_A_cabin_class_code=='F') ? 'selected' : '' ?> >First Class Cabin</option>
                <option value="M" <?= ($CN2F_A_cabin_class_code=='M') ? 'selected' : '' ?> >Mixed of Cabins</option>
                <option value="W" <?= ($CN2F_A_cabin_class_code=='W') ? 'selected' : '' ?> >Premium Economy Cabin</option>				</select>
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the cabin class in which the passengers is likely to be travelling " title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>

		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_time'])) {
                $CN2F_D_flight_time = $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_time'];
            } else {
                $CN2F_D_flight_time = '02:00';
            }
        ?>
			<label for="CN2F_D_flight_time" class="col-sm-6 control-label">Flight departure time hh:mm</label>
			<div class="col-sm-5">
                <div class="form-group nbt-no-horizontal-margin">
                    <div class='input-group date custom-time-picker' id="CN2F_D_flight_time_picker">
				        <input name="CN2F_D_flight_time" id="CN2F_D_flight_time" type="text" class="form-control cost-control dep-control" placeholder="e.g. 22:15" value="<?= $CN2F_D_flight_time ?>" >
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the time that the flight is scheduled to arrive or to depart" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>
		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_date'])) {
                $CN2F_D_flight_date = $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_date'];
            } else {
                $CN2F_D_flight_date = date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d'))));
            }
        ?>
			<label for="CN2F_D_flight_date" class="col-sm-6 control-label">Flight departure date</label>
			<div class="col-sm-5">
				<input name="CN2F_D_flight_date" type="date" class="form-control  dep-control" data-provide="datepicker" value="<?= $CN2F_D_flight_date ?>">
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the date ( month/day/year ) on which the flight arrives or departs" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>
		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_number'])) {
                $CN2F_D_flight_number = $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_flight_number'];
            } else {
                $CN2F_D_flight_number = '';
            }
        ?>
			<label for="CN2F_D_flight_number" class="col-sm-6 control-label">Airline flight number</label>
			<div class="col-sm-5">
				<input name="CN2F_D_flight_number" type="text" class="form-control" placeholder="e.g. SG123" value="<?= $CN2F_D_flight_number ?>" maxlength="20" required>
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the flight number - the airline code eg BA, CX, SQ + a number eg 123, 2345, 008" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>
		<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_D_cabin_class_code'])) {
                $CN2F_D_cabin_class_code = $_SESSION['booking_visa_gbvn'][$count]['CN2F_D_cabin_class_code'];
            } else {
                $CN2F_D_cabin_class_code = 'J';
            }
        ?>
			<label for="CN2F_D_cabin_class_code" class="col-sm-6 control-label">Cabin class</label>
			<div class="col-sm-5">
				<select name="CN2F_D_cabin_class_code" class="form-control">
				<option value="J" <?= ($CN2F_D_cabin_class_code=='J') ? 'selected' : '' ?> >Business Class Cabin</option>
                <option value="Y" <?= ($CN2F_D_cabin_class_code=='Y') ? 'selected' : '' ?> >Economy Class Cabin</option>
                <option value="F" <?= ($CN2F_D_cabin_class_code=='F') ? 'selected' : '' ?> >First Class Cabin</option>
                <option value="M" <?= ($CN2F_D_cabin_class_code=='M') ? 'selected' : '' ?> >Mixed of Cabins</option>
                <option value="W" <?= ($CN2F_D_cabin_class_code=='W') ? 'selected' : '' ?> >Premium Economy Cabin</option>				</select>
			</div>
			<div class="col-sm-1">
				<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the cabin class in which the passengers is likely to be travelling " title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
			</div>
		</div>
	
	
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_total_passengers'])) {
                $CN2F_total_passengers = $_SESSION['booking_visa_gbvn'][$count]['CN2F_total_passengers'];
            } else {
                $CN2F_total_passengers = 0;
            }
        ?>
		<label for="CN2F_total_passengers" class="col-sm-6 control-label">Total number of passengers<br>(including all children)</label>
		<div class="col-sm-5">
			<select name="CN2F_total_passengers" id="CN2F_total_passengers" class="form-control cost-control" onchange="numPersonCN2F(this)">
			<option value="0" <?= ($CN2F_total_passengers==0) ? 'selected' : '' ?> >0</option>
            <option value="1" <?= ($CN2F_total_passengers==1) ? 'selected' : '' ?> >1</option>
            <option value="2" <?= ($CN2F_total_passengers==2) ? 'selected' : '' ?> >2</option>
            <option value="3" <?= ($CN2F_total_passengers==3) ? 'selected' : '' ?> >3</option>
            <option value="4" <?= ($CN2F_total_passengers==4) ? 'selected' : '' ?> >4</option>
            <option value="5" <?= ($CN2F_total_passengers==5) ? 'selected' : '' ?> >5</option>
            <option value="6" <?= ($CN2F_total_passengers==6) ? 'selected' : '' ?> >6</option>
            <option value="7" <?= ($CN2F_total_passengers==7) ? 'selected' : '' ?> >7</option>
            <option value="8" <?= ($CN2F_total_passengers==8) ? 'selected' : '' ?> >8</option>
            <option value="9" <?= ($CN2F_total_passengers==9) ? 'selected' : '' ?> >9</option>			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the total number of passengers (including any infants under 24 months)" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_total_infants'])) {
                $CN2F_total_infants = $_SESSION['booking_visa_gbvn'][$count]['CN2F_total_infants'];
            } else {
                $CN2F_total_infants = 0;
            }
        ?>
		<label for="CN2F_total_infants" class="col-sm-6 control-label">Number of children under 24 months</label>
		<div class="col-sm-5">
			<select name="CN2F_total_infants" id="CN2F_total_infants" class="form-control cost-control cost-control-optional" onchange="numChildrenCN2F(this)">
			<option value="0" <?= ($CN2F_total_infants==0) ? 'selected' : '' ?> >0</option>
            <option value="1" <?= ($CN2F_total_infants==1) ? 'selected' : '' ?> >1</option>
            <option value="2" <?= ($CN2F_total_infants==2) ? 'selected' : '' ?> >2</option>			</select>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the number of infants, who are aged under 24 months at the date of service" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_signboard_message'])) {
                $CN2F_signboard_message = $_SESSION['booking_visa_gbvn'][$count]['CN2F_signboard_message'];
            } else {
                $CN2F_signboard_message = '';
            }
        ?>
		<label for="CN2F_signboard_message" class="col-sm-6 control-label">Signboard message should read</label>
		<div class="col-sm-5">
			<input name="CN2F_signboard_message" type="text" class="form-control" value="<?= $CN2F_signboard_message ?>" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the name, or code word that is to be displayed on the welcome signage" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_lead_passenger_name'])) {
                $CN2F_lead_passenger_name = $_SESSION['booking_visa_gbvn'][$count]['CN2F_lead_passenger_name'];
            } else {
                $CN2F_lead_passenger_name = '';
            }
        ?>
		<label for="CN2F_lead_passenger_name" class="col-sm-6 control-label">Lead passenger name (as in passport)</label>
		<div class="col-sm-5">
			<input name="CN2F_lead_passenger_name" type="text" class="form-control" value="<?= $CN2F_lead_passenger_name ?>" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the name of the principal passenger: we will verify it against their passport" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_lead_passenger_mobile'])) {
                $CN2F_lead_passenger_mobile = $_SESSION['booking_visa_gbvn'][$count]['CN2F_lead_passenger_mobile'];
            } else {
                $CN2F_lead_passenger_mobile = '';
            }
        ?>
		<label for="CN2F_lead_passenger_mobile" class="col-sm-6 control-label">Lead passenger mobile</label>
		<div class="col-sm-5">
			<input name="CN2F_lead_passenger_mobile" type="tel" class="form-control" value="<?= $CN2F_lead_passenger_mobile ?>" pattern="^[\s()+-]*([0-9][\s()+-]*){6,20}$" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the mobile cell number of a passenger or someone travelling with the group " title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_add_info'])) {
                $CN2F_add_info = $_SESSION['booking_visa_gbvn'][$count]['CN2F_add_info'];
            } else {
                $CN2F_add_info = '';
            }
        ?>
		<label for="CN2F_add_info" class="col-sm-6 control-label">Any additional information</label>
		<div class="col-sm-5">
			<textarea name="CN2F_add_info" class="form-control" maxlength="512" rows="6"><?= $CN2F_add_info ?></textarea>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This space is for notes, requests and other information we may need to know" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	
	
	<div class="form-group">
        <?php 
            if (isset($_SESSION['booking_visa_gbvn'][$count]['CN2F_subtotal'])) {
                $CN2F_subtotal = number_format($_SESSION['booking_visa_gbvn'][$count]['CN2F_subtotal'], 2);
            } else {
                $CN2F_subtotal = '0.00';
            }
        ?>
		<label for="CN2F_subtotal" class="col-sm-6 control-label">Price USD</label>
		<div class="col-sm-5">
			<input name="CN2F_subtotal" id="CN2F_subtotal" type="text" class="form-control" value="<?= $CN2F_subtotal ?>" readonly>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the price of the main service you have selected (before any optional add-ons)" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
</div></div>        </div>

</form>

	</div>
 	
</div>
               
</div>
<div class="row">

</div>
</div>

<div class="col-md-4"><div class="row">
		<div class="basket-main">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><a data-toggle="collapse" href="#collapse-summary">Booking Summary <span class="nbt-icon-right glyphicon glyphicon-resize-small" aria-hidden="true"></span></a></h3>
			  </div>
			  <div id="collapse-summary" class="panel-collapse collapse in">
                  <div class="panel-body">
                    
                    <div class="booking-summary" data-summary="%7B%22total_cost%22%3A0%2C%22late_fees%22%3A0%2C%22processing_fee%22%3A0%2C%22season_discount_amt%22%3Anull%2C%22fare_discount_amt%22%3Anull%2C%22payment_amt%22%3A0%2C%22discount_amt%22%3A0%2C%22coupon_amt%22%3A0%7D">
                    <?php 
                    $airport_code = '';
                    $d = 0;
                    foreach ($_SESSION['booking_visa_gbvn'] as $item) { 
                        $d++;
                        $airport_code = $item['airport_code'];
                    ?>
                    <div class="order-summary" data-order-index="0"><h3>Order # <?= $d ?></h3>

                    <p><?= getAirPort($item['airport_code']) ?></p>

                    <p><?= (isset($item['type'])) ? getService($item['type']) : 'No service yet selected' ?></p>
                    <p><?php  
                    $add_on = 0;
                    if (isset($item['POR_selected']) && $item['POR_selected'] != 0) {
                        $add_on++;
                    }
                    if (isset($item['VISA_selected']) && $item['VISA_selected'] != 0) {
                        $add_on++;
                    }
                    echo ($add_on != 0) ? $add_on . ' add-on service' : 'No add-on services selected';
                    ?></p></div>
                    <?php } ?>
                    </div>

                  </div>
                  <input type="hidden" name="provincial" id="provincial" value="<?= $airport_code ?>">
              </div>
			</div>
		</div></div>

        </div>
</div>
<div class="row">
<div class="col-md-12"><div class="row"><div class="booking-page-controls">                
        <div class="col-ms-6">
                    <div class="nbt-center-button">
                        <form action="" method="post">
                            <input id="nbt-previous" type="submit" name="previous" value="previous" class="btn btn-md nbt-button">
                        </form>
                        
                    </div>
                </div>
                <div class="col-ms-6">
                    <div class="nbt-center-button" id="next">
                    <?php if ($select_service == '') { ?>
                        <input type="submit" name="next" id="nbt-service-next-btn" disabled class="btn btn-md nbt-button nbt-button-action" value="next" >
                    <?php } elseif ($select_service == 'arr') { ?>
                        <input type="submit" name="next" id="nbt-service-next-btn" class="btn btn-md nbt-button nbt-button-action" value="next" form="arr" >
                    <?php } elseif ($select_service == 'dep') { ?>
                        <input type="submit" name="next" id="nbt-service-next-btn" class="btn btn-md nbt-button nbt-button-action" value="next" form="dep" >
                    <?php } elseif ($select_service == 'cn2f') { ?>
                        <input type="submit" name="next" id="nbt-service-next-btn" class="btn btn-md nbt-button nbt-button-action" value="next" form="cn2f" >
                    <?php } ?>
                    </div>
                </div>

                </div></div></div>
</div>

        

                </div>
	</div>
</div>
<script type="text/javascript">
    function selectService (data) {
        // alert(data.value);
        var select = data.value;
        if (select == 'ARR') {
            document.getElementById('nbt_core_service_ARR').style.display = 'block';
            document.getElementById('nbt_core_service_DEP').style.display = 'none';
            document.getElementById('nbt_core_service_CN2F').style.display = 'none';
            document.getElementById('next').innerHTML = '<input type="submit" name="next" id="nbt-service-next-btn" class="btn btn-md nbt-button nbt-button-action" value="next" form="arr" >';
            // document.getElementById('nbt-service-next-btn').disabled = false;
        }
        if (select == 'DEP') {
            document.getElementById('nbt_core_service_ARR').style.display = 'none';
            document.getElementById('nbt_core_service_DEP').style.display = 'block';
            document.getElementById('nbt_core_service_CN2F').style.display = 'none';
             document.getElementById('next').innerHTML = '<input type="submit" name="next" id="nbt-service-next-btn" class="btn btn-md nbt-button nbt-button-action" value="next" form="dep" >';
            // document.getElementById('nbt-service-next-btn').disabled = false;
        }
        if (select == 'CN2F') {
            document.getElementById('nbt_core_service_ARR').style.display = 'none';
            document.getElementById('nbt_core_service_DEP').style.display = 'none';
            document.getElementById('nbt_core_service_CN2F').style.display = 'block';
             document.getElementById('next').innerHTML = '<input type="submit" name="next" id="nbt-service-next-btn" class="btn btn-md nbt-button nbt-button-action" value="next" form="cn2f" >';
            // document.getElementById('nbt-service-next-btn').disabled = false;
        }
        if (select == '') {
            document.getElementById('nbt_core_service_ARR').style.display = 'none';
            document.getElementById('nbt_core_service_DEP').style.display = 'none';
            document.getElementById('nbt_core_service_CN2F').style.display = 'none';
            document.getElementById('nbt-service-next-btn').disabled = true;
        }
    }

    function numPersonArr (data) {
        var num = data.value;
        var price = num * 35;
        document.getElementById('ARR_subtotal').value = price.toFixed(2);
    }

    function numPersonArr1 (data) {
        var provincial = document.getElementById('provincial').value;
        // alert(provincial);
        var num = data.value;
        var children = document.getElementById('ARR_total_infants').value;
        var discount = 0;
        if (num == 1 && children >= 1) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('ARR_subtotal').value = no.toFixed(2);
            return false;
        }
        if (num == 2 && children >= 2) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('ARR_subtotal').value = no.toFixed(2);
            return false;
        }

        if (provincial == 'DAD' || provincial == '') {
            core = core_service_rates_arr;
        }
        if (provincial == 'HAN') {
            core = core_service_rates_arr1;
        }
        if (provincial == 'SGN') {
            core = core_service_rates_arr2;
        }
        if (provincial == 'CXR') {
            core = core_service_rates_arr3;
        }

        if (num == 0) {
            var cost = 0
            var out = 0
        }
        if (num == 1) {
            var cost = core[0].cost;
            var out = core[0].out_of_hours_amt;
        }
        if (num == 2) {
            var cost = core[1].cost;
            var out = core[1].out_of_hours_amt;

            if (children == 1) {
                discount = 90;
            }
        }
        if (num == 3) {
            var cost = core[2].cost;
            var out = core[2].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 90 + 80;
            }
        }
        if (num == 4) {
            var cost = core[3].cost;
            var out = core[3].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 80 + 80;
            }
        }
        if (num == 5) {
            var cost = core[4].cost;
            var out = core[4].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 80 + 80;
            }
        }
        if (num == 6) {
            var cost = core[5].cost;
            var out = core[5].out_of_hours_amt;

            if (children == 1) {
                discount = 70;
            }
            if (children == 2) {
                discount = 80 + 70;
            }
        }
        if (num == 7) {
            var cost = core[6].cost;
            var out = core[6].out_of_hours_amt;

            if (children == 1) {
                discount = 70;
            }
            if (children == 2) {
                discount = 70 + 70;
            }
        }
        if (num == 8) {
            var cost = core[7].cost;
            var out = core[7].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 70 + 80;
            }
        }   
        if (num == 9) {
            var cost = core[8].cost;
            var out = core[8].out_of_hours_amt;

            if (children == 1) {
                discount = 50;
            }
            if (children == 2) {
                discount = 80 + 50;
            }
        }

        var total = Number(cost) + Number(out) - discount;//alert(total.toFixed(2));
        document.getElementById('ARR_subtotal').value = total.toFixed(2);
    }

    function numPersonCN2F (data) {
        var num = data.value;
        var price = num * 55;
        document.getElementById('CN2F_subtotal').value = price.toFixed(2);
    }

    function numPersonCN2F1 (data) {
        // alert(data.value);
        var num = data.value;
        var provincial = document.getElementById('provincial').value;
        var children = document.getElementById('CN2F_total_infants').value;
        var discount = 0;

        if (num == 1 && children >= 1) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('CN2F_subtotal').value = no.toFixed(2);
            return false;
        }
        if (num == 2 && children >= 2) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('CN2F_subtotal').value = no.toFixed(2);
            return false;
        }

        if (provincial == 'DAD' || provincial == '') {
            core = core_service_rates_arr;
        }
        if (provincial == 'HAN') {
            core = core_service_rates_arr1;
        }
        if (provincial == 'SGN') {
            core = core_service_rates_arr2;
        }
        if (provincial == 'CXR') {
            core = core_service_rates_arr3;
        }

        if (num == 0) {
            var cost = 0
            var out = 0
        }
        if (num == 1) {
            var cost = core[0].cost;
            var out = core[0].out_of_hours_amt;
        }
        if (num == 2) {
            var cost = core[1].cost;
            var out = core[1].out_of_hours_amt;

            if (children == 1) {
                discount = 90;
            }
        }
        if (num == 3) {
            var cost = core[2].cost;
            var out = core[2].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 90 + 80;
            }
        }
        if (num == 4) {
            var cost = core[3].cost;
            var out = core[3].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 80 + 80;
            }
        }
        if (num == 5) {
            var cost = core[4].cost;
            var out = core[4].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 80 + 80;
            }
        }
        if (num == 6) {
            var cost = core[5].cost;
            var out = core[5].out_of_hours_amt;

            if (children == 1) {
                discount = 70;
            }
            if (children == 2) {
                discount = 80 + 70;
            }
        }
        if (num == 7) {
            var cost = core[6].cost;
            var out = core[6].out_of_hours_amt;

            if (children == 1) {
                discount = 70;
            }
            if (children == 2) {
                discount = 70 + 70;
            }
        }
        if (num == 8) {
            var cost = core[7].cost;
            var out = core[7].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 70 + 80;
            }
        }   
        if (num == 9) {
            var cost = core[8].cost;
            var out = core[8].out_of_hours_amt;

            if (children == 1) {
                discount = 50;
            }
            if (children == 2) {
                discount = 80 + 50;
            }
        }

        var total = Number(cost) + Number(out) - discount;//alert(total.toFixed(2));
        document.getElementById('CN2F_subtotal').value = total.toFixed(2);
    }

    function numPersonDep (data) {
        var num = data.value;
        var price = num * 35;
        document.getElementById('DEP_subtotal').value = price.toFixed(2);
    }

    function numPersonDep1 (data) {
        // alert(data.value);
        var num = data.value;
        var provincial = document.getElementById('provincial').value;
        var children = document.getElementById('DEP_total_infants').value;
        var discount = 0;

        if (num == 1 && children >= 1) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('DEP_subtotal').value = no.toFixed(2);
            return false;
        }
        if (num == 2 && children >= 2) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('DEP_subtotal').value = no.toFixed(2);
            return false;
        }
        if (provincial == 'DAD' || provincial == '') {
            core = core_service_rates_arr;
        }
        if (provincial == 'HAN') {
            core = core_service_rates_arr1;
        }
        if (provincial == 'SGN') {
            core = core_service_rates_arr2;
        }
        if (provincial == 'CXR') {
            core = core_service_rates_arr3;
        }
        
        if (num == 0) {
            var cost = 0
            var out = 0
        }
        if (num == 1) {
            var cost = core[0].cost;
            var out = core[0].out_of_hours_amt;
        }
        if (num == 2) {
            var cost = core[1].cost;
            var out = core[1].out_of_hours_amt;

            if (children == 1) {
                discount = 90;
            }
        }
        if (num == 3) {
            var cost = core[2].cost;
            var out = core[2].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 90 + 80;
            }
        }
        if (num == 4) {
            var cost = core[3].cost;
            var out = core[3].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 80 + 80;
            }
        }
        if (num == 5) {
            var cost = core[4].cost;
            var out = core[4].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 80 + 80;
            }
        }
        if (num == 6) {
            var cost = core[5].cost;
            var out = core[5].out_of_hours_amt;

            if (children == 1) {
                discount = 70;
            }
            if (children == 2) {
                discount = 80 + 70;
            }
        }
        if (num == 7) {
            var cost = core[6].cost;
            var out = core[6].out_of_hours_amt;

            if (children == 1) {
                discount = 70;
            }
            if (children == 2) {
                discount = 70 + 70;
            }
        }
        if (num == 8) {
            var cost = core[7].cost;
            var out = core[7].out_of_hours_amt;

            if (children == 1) {
                discount = 80;
            }
            if (children == 2) {
                discount = 70 + 80;
            }
        }   
        if (num == 9) {
            var cost = core[8].cost;
            var out = core[8].out_of_hours_amt;

            if (children == 1) {
                discount = 50;
            }
            if (children == 2) {
                discount = 80 + 50;
            }
        }

        var total = Number(cost) + Number(out) - discount;//alert(total.toFixed(2));
        document.getElementById('DEP_subtotal').value = total.toFixed(2);
    }

    function numChildrenArr1 (data) {
        // alert(data.value);
        var num = data.value;
        var person = document.getElementById('ARR_total_passengers').value;
        var provincial = document.getElementById('provincial').value;
        var discount = 0;

        if (person == 1 && num >= 1) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('ARR_subtotal').value = no.toFixed(2);
            return false;
        }
        if (person == 2 && num >= 2) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('ARR_subtotal').value = no.toFixed(2);
            return false;
        }

        if (provincial == 'DAD' || provincial == '') {
            core = core_service_rates_arr;
        }
        if (provincial == 'HAN') {
            core = core_service_rates_arr1;
        }
        if (provincial == 'SGN') {
            core = core_service_rates_arr2;
        }
        if (provincial == 'CXR') {
            core = core_service_rates_arr3;
        }

        if (person == 0) {
            var cost = 0
            var out = 0
        }
        if (person == 1) {
            var cost = core[0].cost;
            var out = core[0].out_of_hours_amt;
        }
        if (person == 2) {
            var cost = core[1].cost;
            var out = core[1].out_of_hours_amt;

            if (num == 1) {
                discount = 90;
            }
        }
        if (person == 3) {
            var cost = core[2].cost;
            var out = core[2].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 90 + 80;
            }
        }
        if (person == 4) {
            var cost = core[3].cost;
            var out = core[3].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 80 + 80;
            }
        }
        if (person == 5) {
            var cost = core[4].cost;
            var out = core[4].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 80 + 80;
            }
        }
        if (person == 6) {
            var cost = core[5].cost;
            var out = core[5].out_of_hours_amt;

            if (num == 1) {
                discount = 70;
            }
            if (num == 2) {
                discount = 80 + 70;
            }
        }
        if (person == 7) {
            var cost = core[6].cost;
            var out = core[6].out_of_hours_amt;

            if (num == 1) {
                discount = 70;
            }
            if (num == 2) {
                discount = 70 + 70;
            }
        }
        if (person == 8) {
            var cost = core[7].cost;
            var out = core[7].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 70 + 80;
            }
        }   
        if (person == 9) {
            var cost = core[8].cost;
            var out = core[8].out_of_hours_amt;

            if (num == 1) {
                discount = 50;
            }
            if (num == 2) {
                discount = 80 + 50;
            }
        }

        var total = Number(cost) + Number(out) - discount;//alert(total.toFixed(2));
        document.getElementById('ARR_subtotal').value = total.toFixed(2);
    }

    function numChildrenCN2F1 (data) {
        var num = data.value;
        var person = document.getElementById('CN2F_total_passengers').value;
        var provincial = document.getElementById('provincial').value;
        var discount = 0;

        if (person == 1 && num >= 1) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('CN2F_subtotal').value = no.toFixed(2);
            return false;
        }
        if (person == 2 && num >= 2) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('CN2F_subtotal').value = no.toFixed(2);
            return false;
        }

        if (provincial == 'DAD' || provincial == '') {
            core = core_service_rates_arr;
        }
        if (provincial == 'HAN') {
            core = core_service_rates_arr1;
        }
        if (provincial == 'SGN') {
            core = core_service_rates_arr2;
        }
        if (provincial == 'CXR') {
            core = core_service_rates_arr3;
        }

        if (person == 0) {
            var cost = 0
            var out = 0
        }
        if (person == 1) {
            var cost = core[0].cost;
            var out = core[0].out_of_hours_amt;
        }
        if (person == 2) {
            var cost = core[1].cost;
            var out = core[1].out_of_hours_amt;

            if (num == 1) {
                discount = 90;
            }
        }
        if (person == 3) {
            var cost = core[2].cost;
            var out = core[2].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 90 + 80;
            }
        }
        if (person == 4) {
            var cost = core[3].cost;
            var out = core[3].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 80 + 80;
            }
        }
        if (person == 5) {
            var cost = core[4].cost;
            var out = core[4].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 80 + 80;
            }
        }
        if (person == 6) {
            var cost = core[5].cost;
            var out = core[5].out_of_hours_amt;

            if (num == 1) {
                discount = 70;
            }
            if (num == 2) {
                discount = 80 + 70;
            }
        }
        if (person == 7) {
            var cost = core[6].cost;
            var out = core[6].out_of_hours_amt;

            if (num == 1) {
                discount = 70;
            }
            if (num == 2) {
                discount = 70 + 70;
            }
        }
        if (person == 8) {
            var cost = core[7].cost;
            var out = core[7].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 70 + 80;
            }
        }   
        if (person == 9) {
            var cost = core[8].cost;
            var out = core[8].out_of_hours_amt;

            if (num == 1) {
                discount = 50;
            }
            if (num == 2) {
                discount = 80 + 50;
            }
        }

        var total = Number(cost) + Number(out) - discount;//alert(total.toFixed(2));
        document.getElementById('CN2F_subtotal').value = total.toFixed(2);
    }

    function numChildrenDep1 (data) {
        var num = data.value;
        var person = document.getElementById('DEP_total_passengers').value;
        var provincial = document.getElementById('provincial').value;
        var discount = 0;

        if (person == 1 && num >= 1) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('DEP_subtotal').value = no.toFixed(2);
            return false;
        }
        if (person == 2 && num >= 2) {
            var no = 0;
            alert('Sorry, your requested service is not available for online booking.');
            document.getElementById('DEP_subtotal').value = no.toFixed(2);
            return false;
        }

        if (provincial == 'DAD' || provincial == '') {
            core = core_service_rates_arr;
        }
        if (provincial == 'HAN') {
            core = core_service_rates_arr1;
        }
        if (provincial == 'SGN') {
            core = core_service_rates_arr2;
        }
        if (provincial == 'CXR') {
            core = core_service_rates_arr3;
        }

        if (person == 0) {
            var cost = 0
            var out = 0
        }
        if (person == 1) {
            var cost = core[0].cost;
            var out = core[0].out_of_hours_amt;
        }
        if (person == 2) {
            var cost = core[1].cost;
            var out = core[1].out_of_hours_amt;

            if (num == 1) {
                discount = 90;
            }
        }
        if (person == 3) {
            var cost = core[2].cost;
            var out = core[2].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 90 + 80;
            }
        }
        if (person == 4) {
            var cost = core[3].cost;
            var out = core[3].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 80 + 80;
            }
        }
        if (person == 5) {
            var cost = core[4].cost;
            var out = core[4].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 80 + 80;
            }
        }
        if (person == 6) {
            var cost = core[5].cost;
            var out = core[5].out_of_hours_amt;

            if (num == 1) {
                discount = 70;
            }
            if (num == 2) {
                discount = 80 + 70;
            }
        }
        if (person == 7) {
            var cost = core[6].cost;
            var out = core[6].out_of_hours_amt;

            if (num == 1) {
                discount = 70;
            }
            if (num == 2) {
                discount = 70 + 70;
            }
        }
        if (person == 8) {
            var cost = core[7].cost;
            var out = core[7].out_of_hours_amt;

            if (num == 1) {
                discount = 80;
            }
            if (num == 2) {
                discount = 70 + 80;
            }
        }   
        if (person == 9) {
            var cost = core[8].cost;
            var out = core[8].out_of_hours_amt;

            if (num == 1) {
                discount = 50;
            }
            if (num == 2) {
                discount = 80 + 50;
            }
        }

        var total = Number(cost) + Number(out) - discount;//alert(total.toFixed(2));
        document.getElementById('DEP_subtotal').value = total.toFixed(2);
    }
</script>

<script type="text/javascript">
    $(function () {
        $('#ARR_flight_time_picker').datetimepicker({
            format: 'HH:mm'
        });
    });

    $(function () {
        $('#DEP_flight_time_picker').datetimepicker({
            format: 'HH:mm'
        });
    });

    $(function () {
        $('#CN2F_A_flight_time_picker').datetimepicker({
            format: 'HH:mm'
        });
    });

    $(function () {
        $('#CN2F_D_flight_time_picker').datetimepicker({
            format: 'HH:mm'
        });
    });
</script>
<!-- CN2F_A_flight_time_picker -->
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
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
<!--End of Tawk.to Script-->