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
    // echo '<pre>';
    // var_dump($_SESSION['booking_visa_gbvn']);die;
    if (isset($_POST['next'])) {
        header('location: /book-now4');
    }

    if (isset($_POST['previous'])) {
        header('location: /book-now2');
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

    function getCabin ($code) {
        if ($code == 'J') {
            return 'Business Class Cabin';
        }
        if ($code == 'Y') {
            return 'Economy Class Cabin';
        }
        if ($code == 'F') {
            return 'First Class Cabin';
        }
        if ($code == 'M') {
            return 'Mixed of Cabins';
        }
        if ($code == 'W') {
            return 'Premium Economy Cabin';
        }
    }

    function setRemove () {
        if (isset($_POST['remove'])) {
            // var_dump($_POST['num']);
            $num = (int)$_POST['num'] - 1;
            unset($_SESSION['booking_visa_gbvn'][$num]);
            array_multisort($_SESSION['booking_visa_gbvn'], SORT_DESC);
        }
    }
    setRemove();
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

    .nbt-page-structure h3 {
        font-family: 'Montserrat', sans-serif;
        margin: 0 0 30px 0;
        clear: both;
        text-transform: none;
        font-weight: normal;
        color: #00497F;
        line-height: 1.2;
        font-size: 2em;
    }

    h3.panel-title {
        font-size: 16px;
        color: black;
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

    .order-summary p {
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .order-summary h3 {
        color: #00497f;
        font-size: 16px;
        margin-bottom: 30px;
        font-weight: 400;
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
    table th {
        text-align: right;
        font-weight: bold;
    }
    .review-flip-order-button {
        float: right;
        font-weight: 700;
        height: 40px;
        padding: 8px 25px;
        display: inline-block;
        color: #FFF;
        background-color: #00497F;
        border: none;
        border-radius: 20px;
        text-decoration: none;
        text-align: center;
        margin-bottom: 20px;
        border-radius: 20px;
        transition: all 0.5s ease;
    }
    .review-remove-order-button {
        font-weight: 700;
        height: 40px;
        padding: 8px 25px;
        display: inline-block;
        color: #FFF;
        background-color: #DC143C !important;
        border: none;
        border-radius: 20px;
        text-decoration: none;
        text-align: center;
        margin-bottom: 20px;
        border-radius: 20px;
        transition: all 0.5s ease;
    }
    .booking-page-controls .col-ms-3, .booking-page-controls .col-ms-6 {
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
	<a class="current"><span class="badge badge-inverse">4</span>Review</a>
	<a><span class="badge">5</span>Booker Details</a>
	<a><span class="badge">6</span>Payment</a>

</div>
</div>
<form id="nbt_booking_form" method="POST" action=""></form><input type="hidden" name="wp_session_20170102" value="e628ff9f0135300cb61da19798e21f14||1528100919||1528100919"><div class="col-md-8"><div class="row"><script type="text/javascript">
	var nbt_bookingObj = {"order_arr":[{"order":{"order_id":null,"ext_order_ref":null,"core_service_code":"ARR","service_category_code":"MNA","order_status_code":"N","airport_code":"HAN","cost":699,"ccy":"USD","created_timestamp":"2018-06-04 06:28:39","out_of_hours":"Y","total_cost":699,"total_cost_ccy":"USD","last_amended_timestamp":"2018-06-04 06:28:39","booking_id":null,"late_booking":"N","late_booking_fee":0,"add_info":"","from_db":"N"},"add_on_services_arr":[],"airport_event_arr":{"A":{"order_id":null,"direction_code":"A","cabin_class_code":"J","event_time":"2018-06-11 02:00","flight_number":"123","from_db":"N"},"D":{"order_id":null,"direction_code":"D","cabin_class_code":null,"event_time":null,"flight_number":null,"from_db":"N"}},"limo_event":{"order_id":null,"direction_code":null,"units":null,"zone_id":null,"street_address":null,"town_city":null,"post_code":null,"additional_information":null,"from_db":"N"},"passenger_details":{"order_id":null,"lead_passenger_name":"2","signboard_message":"1","lead_passenger_mobile":"3111111111","total_passengers":9,"total_infants":0,"from_db":"N"},"lounge_event":{"order_id":null,"entry_time":null,"from_db":"N"}}],"booking_transaction":{"booking_id":null,"booking_name":null,"booking_email":null,"booking_phone":null,"created_timestamp":"2018-06-04 06:28:39","last_amended_timestamp":"2018-06-04 06:28:39","booking_status_code":"N","total_cost":699,"ccy":"USD","total_discount_amt":0,"fare_discount_amt":null,"season_discount_amt":null,"coupon_id":null,"processing_fee":0,"fare_type_id":null,"total_late_fees":0,"payment_amt":0,"gateway_code":"PP","from_db":"N"},"payment_event":{"booking_id":null,"payment_id":null,"state":null,"intent":null,"create_time":null,"last_response":null,"from_db":"N"}};
</script>
<input type="hidden" name="country_code" value="VNM">
<input type="hidden" name="booking_sequence_id" value="4">
<input type="hidden" name="order_index_no" value="0">
<input type="hidden" name="order-removal" id="order-removal" value="%5B%5D">
<input type="hidden" name="order-flip" id="order-flip" value="">

<h3>Review your booking</h3>

<span class="review-terms">By placing an order you are accepting the <a href="">terms and conditions</a> of this service.</span>

    <?php 
    $d = 0;
    $tong = 0;
    foreach ($_SESSION['booking_visa_gbvn'] as $item) { 
        $d++;
        if ($item['type'] == 'arr') { 
    ?>
	<div class="order-review-panel">
		<div class="panel panel-default">
		  <div class="panel-heading">
			<div class="row">
				<div class="col-sm-10">
	    			<h3 class="panel-title">Order #<?= $d ?></h3>
				</div>
				<div class="col-sm-2">
                    <?php 
                        $price_porter = (int)$item['POR_selected'];
                        $price_porter = $price_porter * 10;
                        $price_visa = (int)$item['VISA_selected'];
                        $price_visa = $price_visa * 10;
                        $tong += $item['ARR_subtotal'] + $price_porter + $price_visa;
                    ?>
					<label>USD <?= $item['ARR_subtotal'] + $price_porter + $price_visa ?></label>
				</div>
			</div>
		  </div>
		  <div class="panel-body">
			<div class="row"><table class="table review-order-table"><tr><th>Category</th><td>VIP Meet & Assist</td></tr>
            <tr><th>Service</th><td>Arrival</td></tr>
            <tr><th>Airport</th><td><?= getAirPort($item['airport_code']) ?></td></tr>
            <tr><th>Arrival time</th><td><?= date('l jS \of F Y', strtotime($item['ARR_flight_date'])) . ' ' . $item['ARR_flight_time'] ?></td></tr>
            <tr><th>Flight number</th><td><?= $item['ARR_flight_number'] ?></td></tr>
            <tr><th>Cabin class</th><td><?= getCabin($item['ARR_cabin_class_code']) ?></td></tr>
            <tr><th>Lead Passengers Name</th><td><?= $item['ARR_lead_passenger_name'] ?></td></tr>
            <tr><th>Lead Passengers Mobile</th><td><?= $item['ARR_lead_passenger_mobile'] ?></td></tr>
            <tr><th>Signboard message</th><td><?= $item['ARR_signboard_message'] ?></td></tr>
            <tr><th>Number of Passengers</th><td><?= $item['ARR_total_passengers'] ?></td></tr>
            <tr><th>Passengers under 24 months</th><td><?= $item['ARR_total_infants'] ?></td></tr>
            <tr><th>Additional information</th><td><?= $item['ARR_add_info'] ?></td></tr>
            <tr><th>Porter (Baggage Handler)</th><td><?= $item['POR_selected'] ?></td></tr>
            <tr><th>Visa Assistance</th><td><?= $item['VISA_selected'] ?></td></tr>
            </table></div>
			<div class="row">
				<input type="submit" name="submit_action" value="Make it a round-trip" class="review-flip-order-button" data-order-number="0">
                <form action="" method="post">
                    <input type="hidden" name="num" value="<?= $d ?>">
                    <button type="submit" name="remove" value="Remove" class="review-remove-order-button nbt-button-danger" data-order-number="0">Remove order</button>
                </form>
				
			</div><!--  end row -->
		  </div><!--  end panel body -->
		</div><!-- end default panel -->
	</div><!-- end review panel -->
    <?php } 
    if ($item['type'] == 'dep') { 
    ?>
    <div class="order-review-panel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
                <div class="col-sm-10">
                    <h3 class="panel-title">Order #<?= $d ?></h3>
                </div>
                <div class="col-sm-2">
                    <?php 
                        $price_porter = (int)$item['POR_selected'];
                        $price_porter = $price_porter * 10;
                        $price_visa = (int)$item['VISA_selected'];
                        $price_visa = $price_visa * 10;
                        $tong += $item['DEP_subtotal'] + $price_porter + $price_visa;
                    ?>
                    <label>USD <?= $item['DEP_subtotal'] + $price_porter + $price_visa ?></label>
                </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row"><table class="table review-order-table"><tr><th>Category</th><td>VIP Meet & Assist</td></tr>
            <tr><th>Service</th><td>Departure</td></tr>
            <tr><th>Airport</th><td><?= getAirPort($item['airport_code']) ?></td></tr>
            <tr><th>Departure time</th><td><?= date('l jS \of F Y', strtotime($item['DEP_flight_date'])) . ' ' . $item['DEP_flight_time'] ?></td></tr>
            <tr><th>Flight number</th><td><?= $item['DEP_flight_number'] ?></td></tr>
            <tr><th>Cabin class</th><td><?= getCabin($item['DEP_cabin_class_code']) ?></td></tr>
            <tr><th>Lead Passengers Name</th><td><?= $item['DEP_lead_passenger_name'] ?></td></tr>
            <tr><th>Lead Passengers Mobile</th><td><?= $item['DEP_lead_passenger_mobile'] ?></td></tr>
            <tr><th>Signboard message</th><td><?= $item['DEP_signboard_message'] ?></td></tr>
            <tr><th>Number of Passengers</th><td><?= $item['DEP_total_passengers'] ?></td></tr>
            <tr><th>Passengers under 24 months</th><td><?= $item['DEP_total_infants'] ?></td></tr>
            <tr><th>Additional information</th><td><?= $item['DEP_add_info'] ?></td></tr>
            <tr><th>Porter (Baggage Handler)</th><td><?= $item['POR_selected'] ?></td></tr>
            <tr><th>Visa Assistance</th><td><?= $item['VISA_selected'] ?></td></tr>
            </table></div>
            <div class="row">
                <input type="submit" name="submit_action" value="Make it a round-trip" class="review-flip-order-button" data-order-number="0">
                <form action="" method="post">
                    <input type="hidden" name="num" value="<?= $d ?>">
                    <button type="submit" name="remove" value="Remove" class="review-remove-order-button nbt-button-danger" data-order-number="0">Remove order</button>
                </form>
            </div><!--  end row -->
          </div><!--  end panel body -->
        </div><!-- end default panel -->
    </div><!-- end review panel -->
    <?php } 
    if ($item['type'] == 'cn2f') { 
    ?>
    <div class="order-review-panel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
                <div class="col-sm-10">
                    <h3 class="panel-title">Order #<?= $d ?></h3>
                </div>
                <div class="col-sm-2">
                    <?php 
                        $price_porter = (int)$item['POR_selected'];
                        $price_porter = $price_porter * 10;
                        $price_visa = (int)$item['VISA_selected'];
                        $price_visa = $price_visa * 10;
                        $tong += $item['CN2F_subtotal'] + $price_porter + $price_visa;
                    ?>
                    <label>USD <?= $item['CN2F_subtotal'] + $price_porter + $price_visa ?></label>
                </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row"><table class="table review-order-table"><tr><th>Category</th><td>VIP Meet & Assist</td></tr>
            <tr><th>Service</th><td>Connection between any two flights, no buggies</td></tr>
            <tr><th>Airport</th><td><?= getAirPort($item['airport_code']) ?></td></tr>
            <tr><th>Arrival time</th><td><?= date('l jS \of F Y', strtotime($item['CN2F_A_flight_date'])) . ' ' . $item['CN2F_A_flight_time'] ?></td></tr>
            <tr><th>Arrival Flight number</th><td><?= $item['CN2F_A_flight_number'] ?></td></tr>
            <tr><th>Arrival Cabin class</th><td><?= getCabin($item['CN2F_A_cabin_class_code']) ?></td></tr>
            <tr><th>Departure time</th><td><?= date('l jS \of F Y', strtotime($item['CN2F_D_flight_date'])) . ' ' . $item['CN2F_D_flight_time'] ?></td></tr>
            <tr><th>Departure Flight number</th><td><?= $item['CN2F_D_flight_number'] ?></td></tr>
            <tr><th>Departure Cabin class</th><td><?= getCabin($item['CN2F_D_cabin_class_code']) ?></td></tr>
            <tr><th>Lead Passengers Name</th><td><?= $item['CN2F_lead_passenger_name'] ?></td></tr>
            <tr><th>Lead Passengers Mobile</th><td><?= $item['CN2F_lead_passenger_mobile'] ?></td></tr>
            <tr><th>Signboard message</th><td><?= $item['CN2F_signboard_message'] ?></td></tr>
            <tr><th>Number of Passengers</th><td><?= $item['CN2F_total_passengers'] ?></td></tr>
            <tr><th>Passengers under 24 months</th><td><?= $item['CN2F_total_infants'] ?></td></tr>
            <tr><th>Additional information</th><td><?= $item['CN2F_add_info'] ?></td></tr>
            <tr><th>Porter (Baggage Handler)</th><td><?= $item['POR_selected'] ?></td></tr>
            <tr><th>Visa Assistance</th><td><?= $item['VISA_selected'] ?></td></tr>
            </table></div>
            <div class="row">
                <input type="submit" name="submit_action" value="Make it a round-trip" class="review-flip-order-button" data-order-number="0">
                <form action="" method="post">
                    <input type="hidden" name="num" value="<?= $d ?>">
                    <button type="submit" name="remove" value="Remove" class="review-remove-order-button nbt-button-danger" data-order-number="0">Remove order</button>
                </form>
            </div><!--  end row -->
          </div><!--  end panel body -->
        </div><!-- end default panel -->
    </div><!-- end review panel -->
    <?php } ?>
    <?php } ?>
	<div class="order-review-panel">
		<div class="panel panel-default">
		  <div class="panel-heading">
			<div class="row">
				<div class="col-sm-10">
	    			<h3 class="panel-title">Total Booking Cost</h3>
				</div>
				<div class="col-sm-2">
					<label>USD <?= number_format($tong, 2) ?></label>
				</div>
			</div>
		  </div>
		  <div class="panel-body">
			
		  </div><!--  end panel body -->
		</div><!-- end default panel -->
	</div><!-- end review panel -->
	</div></div><div class="col-md-4"><div class="row">
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
                    <hr><table class="cost-summary-table"><tr><th>Total cost</th><td>USD</td><td class="nbt-right"><?= number_format($tong, 2) ?></td></tr></table></div>
                  </div>
              </div>
			</div>
		</div></div></div>

        <div class="col-md-12"><div class="row"><div class="booking-page-controls">                <div class="col-ms-3">
                    <div class="nbt-center-button">
                        <form action="" method="post">
                            <input id="nbt-previous" type="submit" name="previous" value="previous" class="btn btn-md nbt-button">
                        </form>                       
                    </div>
                </div>

                <div class="col-ms-3">
                    <div class="nbt-center-button">
                        <input type="submit" name="next" class="btn btn-md nbt-button nbt-button-action" value="next" form="nbt_booking_form">
                    </div>
                </div>
                <div class="col-ms-6">
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