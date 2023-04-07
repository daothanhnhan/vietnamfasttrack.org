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
        header('location: /book-now3');
    }

    function book_now_4 () {
        if (isset($_POST['pay'])) {
            // echo '<pre>';
            // var_dump($_POST);die;
            $_SESSION['infor_paypal']['booking_name'] = $_POST['booking_name'];
            $_SESSION['infor_paypal']['booking_email'] = $_POST['booking_email'];
            $_SESSION['infor_paypal']['booking_phone'] = $_POST['booking_phone'];
            header('location: /book-now5');
        }
    }
    book_now_4();

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

    #nbt_booking_form h3 {
        font-family: 'Montserrat', sans-serif;
        margin: 0 0 30px 0;
        clear: both;
        text-transform: none;
        font-weight: normal;
        color: #00497F;
        line-height: 1.2;
        font-size: 2em;
    }

    #nbt_booking_form .order-summary h3 {
        font-size: 16px;
    }

    #nbt_booking_form h3.panel-title {
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
        margin-top: 20px;
    }

    #nbt_booking_form p {
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
    #nbt_booking_form .row {
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
    label {
        font-weight: bold;
    }
    a.radio {
        float: right;
    }
    #coupon_validation {
        background-color: #00497F;
        color: white;
    }
    .booking-page-controls .col-ms-4, .booking-page-controls .col-ms-8 {
        display: inline-block;
        width: 16%;
    }
    .nbt-button-action {
        background-color: #228B22 !important;
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
	<a><span class="badge">2</span>Service</a>
	<a><span class="badge">3</span>Add-on</a>
	<a><span class="badge">4</span>Review</a>
	<a class="current"><span class="badge badge-inverse">5</span>Booker Details</a>
	<a><span class="badge">6</span>Payment</a>

</div>
</div>
<form id="nbt_booking_form" method="POST"><input type="hidden" name="wp_session_20170102" value="e628ff9f0135300cb61da19798e21f14||1528100919||1528100919"><div class="col-md-8"><div class="row"><script type="text/javascript">
	var nbt_bookingObj = {"order_arr":[{"order":{"order_id":null,"ext_order_ref":null,"core_service_code":"ARR","service_category_code":"MNA","order_status_code":"N","airport_code":"HAN","cost":699,"ccy":"USD","created_timestamp":"2018-06-04 06:28:39","out_of_hours":"Y","total_cost":699,"total_cost_ccy":"USD","last_amended_timestamp":"2018-06-04 06:28:39","booking_id":null,"late_booking":"N","late_booking_fee":0,"add_info":"","from_db":"N"},"add_on_services_arr":[],"airport_event_arr":{"A":{"order_id":null,"direction_code":"A","cabin_class_code":"J","event_time":"2018-06-11 02:00","flight_number":"123","from_db":"N"},"D":{"order_id":null,"direction_code":"D","cabin_class_code":null,"event_time":null,"flight_number":null,"from_db":"N"}},"limo_event":{"order_id":null,"direction_code":null,"units":null,"zone_id":null,"street_address":null,"town_city":null,"post_code":null,"additional_information":null,"from_db":"N"},"passenger_details":{"order_id":null,"lead_passenger_name":"2","signboard_message":"1","lead_passenger_mobile":"3111111111","total_passengers":9,"total_infants":0,"from_db":"N"},"lounge_event":{"order_id":null,"entry_time":null,"from_db":"N"}}],"booking_transaction":{"booking_id":null,"booking_name":null,"booking_email":null,"booking_phone":null,"created_timestamp":"2018-06-04 06:28:39","last_amended_timestamp":"2018-06-04 06:28:39","booking_status_code":"N","total_cost":699,"ccy":"USD","total_discount_amt":0,"fare_discount_amt":"0","season_discount_amt":0,"coupon_id":0,"processing_fee":27.96,"fare_type_id":null,"total_late_fees":0,"payment_amt":726.96,"gateway_code":"PP","from_db":"N"},"payment_event":{"booking_id":null,"payment_id":null,"state":null,"intent":null,"create_time":null,"last_response":null,"from_db":"N"}};
</script>
<input type="hidden" name="country_code" value="VNM">
<input type="hidden" name="booking_sequence_id" value="5">
<input type="hidden" name="order_index_no" value="0">
	
<h3>Please enter the details of the person making this booking</h3>

<div class="form-horizontal">
	<div class="form-group">
		<label for="booking_name" class="col-sm-6 control-label">Name of the person making the booking</label>
		<div class="col-sm-5">
			<input name="booking_name" type="text" class="form-control" value=""  maxlength="50" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the name of the booker" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
		<label for="booking_email" class="col-sm-6 control-label">Email of the person making the booking</label>
		<div class="col-sm-5">
			<input name="booking_email" type="email" class="form-control"  pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" value="" required>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the e-mail of the booker" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
	<div class="form-group">
		<label for="booking_phone" class="col-sm-6 control-label">Phone number of the person making the booking</label>
		<div class="col-sm-5">
			<input name="booking_phone" type="tel" class="form-control" value="" required  pattern="^[\s()+-]*([0-9][\s()+-]*){6,20}$">
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is the cell or mobile number of the booker" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
                <div class="nbt-fare-type-area">
                <label>Please choose the type of fare for this booking</label>
                        <div class="row">
                    <div class="col-xs-6 nbt-fare-key-terms" data-fare_type_id="1">
                        <a class="radio" href="#">key terms of this fare</a>
                    </div>
                    <div class="radio col-xs-6">
                        <label class="nbt-fare-type-name"><input type="radio" name="fare-type-selection" value="1"  checked="checked">Flexible price</label>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-xs-6 nbt-fare-key-terms" data-fare_type_id="2">
                        <a class="radio" href="#">key terms of this fare</a>
                    </div>
                    <div class="radio col-xs-6">
                        <label class="nbt-fare-type-name"><input type="radio" name="fare-type-selection" value="2"  >Discounted price</label>
                    </div>
                </div>
                            </div>
            <script>
                var nbt_fare_type_data = [{"fare_type_id":"1","default_fare_type":"Y","fare_type_active":"Y","discount_amt":"0","key_terms":"A Flexible Price booking may be Changed or Cancelled more than 48 hours ahead without charge.","detailed_terms_url":"flexible-terms","fare_type_name":"Flexible price"},{"fare_type_id":"2","default_fare_type":"N","fare_type_active":"Y","discount_amt":"30","key_terms":"USD30 discount per booking will be applied.  Each permitted Change or Cancellation to a Discounted Price booking will cost USD30.","detailed_terms_url":"earlybird-terms","fare_type_name":"Discounted price"}];
            </script>
        	<div class="form-group">
		<label for="coupon_code" class="col-sm-6 control-label">Enter a coupon code if you have one and press "validate"</label>
		<div class="col-sm-5">
			<div class="input-group">
							<input name="coupon_code" type="text" class="form-control" value="" pattern="([a-zA-Z0-9]|_|%|#|-|&|!)*">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default" id="coupon_validation">Validate</button>
				</div>
			</div>
		</div>
		<div class="col-sm-1">
			<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="This is for any coupon code you have: if it is valid a discount will automatically be applied" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
		</div>
	</div>
</div>
               
</div></div><div class="col-md-4"><div class="row">
		<div class="basket-main">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><a data-toggle="collapse" href="#collapse-summary">Booking Summary <span class="nbt-icon-right glyphicon glyphicon-resize-small" aria-hidden="true"></span></a></h3>
			  </div>
			  <div id="collapse-summary" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <div class="booking-summary" data-summary="%7B%22total_cost%22%3A699%2C%22late_fees%22%3A0%2C%22processing_fee%22%3A27.96%2C%22season_discount_amt%22%3A0%2C%22fare_discount_amt%22%3A%220%22%2C%22payment_amt%22%3A726.96%2C%22discount_amt%22%3A0%2C%22coupon_amt%22%3A0%7D">

                    <?php 
                    $d = 0;
                    $tong = 0;
                    foreach ($_SESSION['booking_visa_gbvn'] as $item) { 
                        $d++;
                        $subtotal = 0;
                        $price_porter = (int)$item['POR_selected'];
                        $price_porter = $price_porter * 10;
                        $price_visa = (int)$item['VISA_selected'];
                        $price_visa = $price_visa * 10;
                        if ($item['type'] == 'arr') {
                            $subtotal = $item['ARR_subtotal'] + $price_porter + $price_visa;
                        }
                        if ($item['type'] == 'dep') {
                            $subtotal = $item['DEP_subtotal'] + $price_porter + $price_visa;
                        }
                        if ($item['type'] == 'cn2f') {
                            $subtotal = $item['CN2F_subtotal'] + $price_porter + $price_visa;
                        }

                        $tong += $subtotal;
                    ?>
                    <div class="order-summary" data-order-index="0">
                    <h3>Order # <?= $d ?></h3>
                    <p><?= getAirPort($item['airport_code']); ?></p>
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
                    ?></p>
                    <p>Cost: USD <?= number_format($subtotal, 2) ?></p></div>
                    <?php } ?>

                    <hr><table class="cost-summary-table"><tr><th>Total cost</th><td>USD</td><td class="nbt-right"><?= number_format($tong, 2) ?></td></tr><tr class="booking-discount"><th>Processing fee</th><td>USD</td><td class="nbt-right">27.96</td></tr><tr class="booking-discount"><th>Payment amount</th><td>USD</td><td class="nbt-right"><?= number_format($tong + 27.96, 2) ?></td></tr></table></div>
                  </div>
              </div>
			</div>
		</div></div></div>
        </form>
        <div class="col-md-12"><div class="row"><div class="booking-page-controls">                <div class="col-ms-4">
                    <div class="nbt-button-center">
                    <form action="" method="post">
                        <input id="nbt-previous" type="submit" name="previous" value="previous"
                               class="btn btn-md nbt-button nbt-submit-button">
                    </form>
                        
                    </div>
                </div>

                <div class="col-ms-4">
                    <div class="nbt-center-button">
                        <input type="submit" name="pay" id="nbt-pay-btn" class="btn btn-md nbt-button nbt-button-action"
                               value="pay" form="nbt_booking_form" >
                        <!-- <div style="display: none;"><input type="submit" id="nbt-pay-btn-hidden" name="pay" value="pay"></div> -->
                        <input type="hidden" id="nbt-pay-btn-submit" name="submit_action">
                    </div>
                </div>
                <div class="col-ms-8">
                    <div class="nbt-center-button-lg">
                        <form action="/book-now/add" method="post">
                            <input type="submit" name="submit_action" value="book another service" class="btn btn-md nbt-button-lg">
                        </form>
                    </div>
                </div>
                </div></div></div></div>
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
<!--End of Tawk.to Script-->