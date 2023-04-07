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
    // unset($_SESSION);
    // echo '<pre>';
    // var_dump($_SESSION['booking_visa_gbvn']);die;
    if (isset($_POST['previous'])) {
        header('location: /book-now1');
    }
    function getPassengers () {
        $count = count($_SESSION['booking_visa_gbvn']) - 1;
        if ($_SESSION['booking_visa_gbvn'][$count]['type'] == 'arr') {
            return $_SESSION['booking_visa_gbvn'][$count]['ARR_total_passengers'];
        }
        if ($_SESSION['booking_visa_gbvn'][$count]['type'] == 'dep') {
            return $_SESSION['booking_visa_gbvn'][$count]['DEP_total_passengers'];
        }
        if ($_SESSION['booking_visa_gbvn'][$count]['type'] == 'cn2f') {
            return $_SESSION['booking_visa_gbvn'][$count]['CN2F_total_passengers'];
        }
    }
    $passengers = getPassengers();
    // var_dump($passengers);die;

    function book_now_2 () {
        if (isset($_POST['next'])) {
            $count = count($_SESSION['booking_visa_gbvn']) - 1;
            $_SESSION['booking_visa_gbvn'][$count]['POR_selected'] = $_POST['POR_selected'];
            $_SESSION['booking_visa_gbvn'][$count]['VISA_selected'] = $_POST['VISA_selected'];
            header('location: /book-now3');
        }
    }
    book_now_2();

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

    function getAddPorter () {
        $count = count($_SESSION['booking_visa_gbvn']) - 1;
        if (isset($_SESSION['booking_visa_gbvn'][$count]['POR_selected'])) {
            return (int)$_SESSION['booking_visa_gbvn'][$count]['POR_selected'];
        } else {
            return 0;
        }
    }
    $add_porter = getAddPorter();

    function getAddVisa () {
        $count = count($_SESSION['booking_visa_gbvn']) - 1;
        if (isset($_SESSION['booking_visa_gbvn'][$count]['VISA_selected'])) {
            return (int)$_SESSION['booking_visa_gbvn'][$count]['VISA_selected'];
        } else {
            return 0;
        }        
    }
    $add_visa = getAddVisa();
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
	<a class="current"><span class="badge badge-inverse">3</span>Add-on</a>
	<a><span class="badge">4</span>Review</a>
	<a><span class="badge">5</span>Booker Details</a>
	<a><span class="badge">6</span>Payment</a>

</div>
</div>
<form id="nbt_booking_form" method="POST" action=""><input type="hidden" name="wp_session_20170102" value="e628ff9f0135300cb61da19798e21f14||1528100919||1528100919">
<div class="row">
<div class="col-md-8"><div class="row"><script type="text/javascript">
	var nbt_bookingObj = {"order_arr":[{"order":{"order_id":null,"ext_order_ref":null,"core_service_code":"ARR","service_category_code":"MNA","order_status_code":"N","airport_code":"HAN","cost":699,"ccy":"USD","created_timestamp":"2018-06-04 06:28:39","out_of_hours":"Y","total_cost":699,"total_cost_ccy":"USD","last_amended_timestamp":"2018-06-04 06:28:39","booking_id":null,"late_booking":"N","late_booking_fee":0,"add_info":"","from_db":"N"},"add_on_services_arr":[],"airport_event_arr":{"A":{"order_id":null,"direction_code":"A","cabin_class_code":"J","event_time":"2018-06-11 02:00","flight_number":"123","from_db":"N"},"D":{"order_id":null,"direction_code":"D","cabin_class_code":null,"event_time":null,"flight_number":null,"from_db":"N"}},"limo_event":{"order_id":null,"direction_code":null,"units":null,"zone_id":null,"street_address":null,"town_city":null,"post_code":null,"additional_information":null,"from_db":"N"},"passenger_details":{"order_id":null,"lead_passenger_name":"2","signboard_message":"1","lead_passenger_mobile":"3111111111","total_passengers":9,"total_infants":0,"from_db":"N"},"lounge_event":{"order_id":null,"entry_time":null,"from_db":"N"}}],"booking_transaction":{"booking_id":null,"booking_name":null,"booking_email":null,"booking_phone":null,"created_timestamp":"2018-06-04 06:28:39","last_amended_timestamp":"2018-06-04 06:28:39","booking_status_code":"N","total_cost":699,"ccy":"USD","total_discount_amt":0,"fare_discount_amt":null,"season_discount_amt":null,"coupon_id":null,"processing_fee":0,"fare_type_id":null,"total_late_fees":0,"payment_amt":0,"gateway_code":"PP","from_db":"N"},"payment_event":{"booking_id":null,"payment_id":null,"state":null,"intent":null,"create_time":null,"last_response":null,"from_db":"N"}};
	var addon_rates_arr = [{"optional_add_on_code":"POR","airport_code":"HAN","units":"1","cost":"10.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"2","cost":"20.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"3","cost":"30.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"4","cost":"40.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"5","cost":"50.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"6","cost":"60.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"1","cost":"20.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"2","cost":"40.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"3","cost":"60.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"4","cost":"80.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"5","cost":"100.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"6","cost":"120.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"7","cost":"140.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"8","cost":"160.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"VISA","airport_code":"HAN","units":"9","cost":"180.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PX","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"1","cost":"10.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"2","cost":"20.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"3","cost":"30.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"4","cost":"40.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"5","cost":"50.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"6","cost":"60.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"1","cost":"10.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"2","cost":"20.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"3","cost":"30.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"4","cost":"40.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"5","cost":"50.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"},{"optional_add_on_code":"POR","airport_code":"HAN","units":"6","cost":"60.0000","ccy":"USD","out_of_hours_amt":"0.0000","out_of_hours_amt_type":"F","unit_type_code":"PO","rate_type_code":"U"}];
	var addon_services_arr = [{"code":"POR","name":"Porter (Baggage Handler)","service_category_code":"MNA","out_of_hours_code":"FP","unit_type_code":"PO","units_selection_allowed":"Y","img_url":null,"rate_type_code":"U","unit_name":"porters"},{"code":"VISA","name":"Visa Assistance","service_category_code":"MNA","out_of_hours_code":"N","unit_type_code":"PX","units_selection_allowed":"Y","img_url":null,"rate_type_code":"U","unit_name":"people"}];
	var airports_arr = [{"code":"DAD","name":"Da Nang (DAD)","country_code":"VNM","core_hours_start":"06:00:00","core_hours_end":"18:00:00","service_hours_lead":"36","tz_offset":"7.00"},{"code":"HAN","name":"Hanoi (HAN)","country_code":"VNM","core_hours_start":"06:00:00","core_hours_end":"18:00:00","service_hours_lead":"36","tz_offset":"7.00"},{"code":"SGN","name":"Ho Chi Minh City (SGN)","country_code":"VNM","core_hours_start":"06:00:00","core_hours_end":"18:00:00","service_hours_lead":"36","tz_offset":"7.00"}];
	var vehicles_arr = [{"core_service_code":"ATD2","vehicle_code":"XCAR","max_passengers":"3","name":"executive car","img_url":""},{"core_service_code":"ATA2","vehicle_code":"XCAR","max_passengers":"3","name":"executive car","img_url":""},{"core_service_code":"ATD5","vehicle_code":"XMPV","max_passengers":"5","name":"executive MPV","img_url":""},{"core_service_code":"ATA5","vehicle_code":"XMPV","max_passengers":"5","name":"executive MPV","img_url":""},{"core_service_code":"ATD3","vehicle_code":"LCAR","max_passengers":"3","name":"luxury car","img_url":""},{"core_service_code":"ATA3","vehicle_code":"LCAR","max_passengers":"3","name":"luxury car","img_url":""},{"core_service_code":"ATA6","vehicle_code":"LMPV","max_passengers":"5","name":"luxury MPV","img_url":""},{"core_service_code":"ATD6","vehicle_code":"LMPV","max_passengers":"5","name":"luxury MPV","img_url":""},{"core_service_code":"ATD1","vehicle_code":"CAR","max_passengers":"3","name":"standard car","img_url":""},{"core_service_code":"ATA1","vehicle_code":"CAR","max_passengers":"3","name":"standard car","img_url":""},{"core_service_code":"ATD4","vehicle_code":"MPV","max_passengers":"5","name":"standard MPV","img_url":""},{"core_service_code":"ATA4","vehicle_code":"MPV","max_passengers":"5","name":"standard MPV","img_url":""}];
</script>

<input type="hidden" name="country_code" value="VNM">
<input type="hidden" name="booking_sequence_id" value="3">
<input type="hidden" name="order_index_no" value="0">
	
<h3>Select any add-on services you need and fill in the details</h3>


<div class="panel-group addon_content" id="accordion">
 	<div class="panel panel-default" data-addon-service-code="POR">
		<div class="panel-heading">
			<div class="row">
				<div class="col-sm-8">
					<span class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Add Porter (Baggage Handler)</a>
					</span>
				</div>
				<div class="col-sm-4">
										<label id="POR_subtotal">$ <?= (float)($add_porter*10) ?></label>
				</div>
			</div>
		</div>

	    <div id="collapse1" class="panel-collapse collapse">
			<div class="row">
				<div class="form-horizontal">
											<div class="form-group">
							<label class="col-sm-6 control-label">About this service</label>
							<div class="col-sm-5">
								<div class="nbt_service_note">Maximum of Three(3) porters per service. One porter moves 2 checked bags</div>
							</div>
						</div>
						
					<div class="form-group">

												<label for="POR_selected" class="col-sm-6 control-label">Enter the number of porters</label>
						<div class="col-sm-5">
							<select name="POR_selected" class="form-control addon-cost-control" onchange="total_porter(this)">
							<option value="0" <?= ($add_porter==0) ? 'selected' : '' ?> >0</option>
                            <option value="1" <?= ($add_porter==1) ? 'selected' : '' ?> >1</option>
                            <option value="2" <?= ($add_porter==2) ? 'selected' : '' ?> >2</option>
                            <option value="3" <?= ($add_porter==3) ? 'selected' : '' ?> >3</option>
                            <option value="4" <?= ($add_porter==4) ? 'selected' : '' ?> >4</option>
                            <option value="5" <?= ($add_porter==5) ? 'selected' : '' ?> >5</option>
                            <option value="6" <?= ($add_porter==6) ? 'selected' : '' ?> >6</option>
                            <option value="7" <?= ($add_porter==7) ? 'selected' : '' ?> >7</option>
                            <option value="8" <?= ($add_porter==8) ? 'selected' : '' ?> >8</option>							</select>
						</div>
						<div class="col-sm-1">
							<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="Select  the number of porters (baggage handlers) you want: allow for 2 or 3 bags per porter" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
 	<div class="panel panel-default" data-addon-service-code="VISA">
		<div class="panel-heading">
			<div class="row">
				<div class="col-sm-8">
					<span class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Add Visa Assistance</a>
					</span>
				</div>
				<div class="col-sm-4">
										<label id="VISA_subtotal">$ <?= (float)($add_visa*10) ?></label>
				</div>
			</div>
		</div>

	    <div id="collapse2" class="panel-collapse collapse">
			<div class="row">
				<div class="form-horizontal">
											<div class="form-group">
							<label class="col-sm-6 control-label">About this service</label>
							<div class="col-sm-5">
								<div class="nbt_service_note">fast track the issue of any VOA: excludes the cost of a visa or any stamping fee</div>
							</div>
						</div>
						
					<div class="form-group">

												<label for="VISA_selected" class="col-sm-6 control-label">Enter the number of people</label>
						<div class="col-sm-5">
							<select name="VISA_selected" class="form-control addon-cost-control" onchange="total_visa(this)">
    							<option value="0" <?= ($add_visa == 0) ? 'selected' : '' ?> >0</option>
                                <?php for ($i=1;$i<=$passengers;$i++) { ?>
                                <option value="<?= $i ?>" <?= ($add_visa == $i) ? 'selected' : '' ?> ><?= $i ?></option>							
                                <?php } ?>
                            </select>
						</div>
						<div class="col-sm-1">
							<span  class="nbt-help-popover" data-toggle="popover" data-placement="right" data-content="Select the number of passengers who want help to buy their VOA (cost of VOA not included)" title="Booking information"><i class="fa fa-fw fa-info-circle"></i></span>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
 	
</div>

               
</div>
<!-- <div class="row">tuan</div> -->
</div><div class="col-md-4"><div class="row">
		<div class="basket-main">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><a data-toggle="collapse" href="#collapse-summary">Booking Summary <span class="nbt-icon-right glyphicon glyphicon-resize-small" aria-hidden="true"></span></a></h3>
			  </div>
			  <div id="collapse-summary" class="panel-collapse collapse in">
                  <div class="panel-body">
                    
                    <div class="booking-summary" data-summary="%7B%22total_cost%22%3A699%2C%22late_fees%22%3A0%2C%22processing_fee%22%3A0%2C%22season_discount_amt%22%3Anull%2C%22fare_discount_amt%22%3Anull%2C%22payment_amt%22%3A0%2C%22discount_amt%22%3A0%2C%22coupon_amt%22%3A0%7D">
                    <?php 
                    $d = 0;
                    $tong = 0;
                    foreach ($_SESSION['booking_visa_gbvn'] as $item) { 
                        $d++;
                        $subtotal = 0;
                        if ($item['type'] == 'arr') {
                            $subtotal = $item['ARR_subtotal'];
                        }
                        if ($item['type'] == 'dep') {
                            $subtotal = $item['DEP_subtotal'];
                        }
                        if ($item['type'] == 'cn2f') {
                            $subtotal = $item['CN2F_subtotal'];
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
                    <p>Cost: USD <?= number_format($subtotal, 2) ?></p>
                    </div>
                    <?php } ?>
                    <hr>
                    <table class="cost-summary-table"><tr><th>Total cost</th><td>USD</td><td class="nbt-right"><?= number_format($tong, 2) ?></td></tr></table></div>
                    
                  </div>
              </div>
			</div>
		</div></div></div>
</div>
<div class="row">
        <div class="col-md-12"><div class="row"><div class="booking-page-controls">
                <div class="col-ms-6">
                    <div class="nbt-center-button">
                        <input id="nbt-previous" type="submit" name="previous" value="previous"
                               class="btn btn-md nbt-button">
                    </div>
                </div>

                <div class="col-ms-6">
                    <div class="nbt-center-button">
                        <input type="submit" name="next" class="btn btn-md nbt-button nbt-button-action"
                               value="next" >
                    </div>
                </div>
                </div></div></div>
</div>
                </form></div>
	</div>
</div>
<script type="text/javascript">
    function total_visa(data) {
        var total = data.value;
        total = total * 10;
        document.getElementById("VISA_subtotal").innerHTML = "$ " + total;
    }

    function total_porter(data) {
        var total = data.value;
        total = total * 10;
        document.getElementById("POR_subtotal").innerHTML = "$ " + total;
    }
</script>
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