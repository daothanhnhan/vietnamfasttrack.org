<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
<?php 
	// unset($_SESSION['booking_visa_gbvn']);
 //    echo '<pre>';
 //    var_dump($_SESSION['booking_visa_gbvn']);die;
	
	function book_now () {
		if (isset($_POST['meet-assist'])) {
			if (isset($_GET['trang']) && $_GET['trang'] == 'add') {
				$_SESSION['booking_visa_gbvn'][]['airport_code'] = $_POST['airport_code'];			
			} else {
				$count = count($_SESSION['booking_visa_gbvn']) - 1;//echo $count;die;
				if ($count < 0) {
					$_SESSION['booking_visa_gbvn'][]['airport_code'] = $_POST['airport_code'];
				} else {
					$_SESSION['booking_visa_gbvn'][$count]['airport_code'] = $_POST['airport_code'];
				}				
			}
			
			// var_dump($_SESSION['booking_visa_gbvn']);die;
			header('location: /book-now1');
		}
	}
	book_now();

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

    function getTypeCode () {
    	if (isset($_SESSION['booking_visa_gbvn'])) {
    		$count = count($_SESSION['booking_visa_gbvn']) - 1;
    		return $_SESSION['booking_visa_gbvn'][$count]['airport_code'];
    	} else {
    		return 'DAD';
    	}
    }
    $type = getTypeCode();
?>
<style type="text/css">
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
	#nbt_booking_form p {
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .order-summary h3 {
        color: #00497f;
        font-size: 16px;
        margin-bottom: 30px;
        font-weight: 400;
    }
</style>

<div class="container">
    <div class="row nbt-header-navigation">
        <div class="col-sm-6">
            <div class="nbt-col-center top-action-button">
                <a href="" class="btn btn-md nbt-start-over-btn"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Go back to the start</a>
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
	<a class="current"><span class="badge badge-inverse">1</span>Category</a>
	<a><span class="badge">2</span>Service</a>
	<a><span class="badge">3</span>Add-on</a>
	<a><span class="badge">4</span>Review</a>
	<a><span class="badge">5</span>Booker Details</a>
	<a><span class="badge">6</span>Payment</a>

</div>
</div>
<form id="nbt_booking_form" method="POST" action=""><input type="hidden" name="wp_session_20170102" value="3c05b4aca8879317c733cf9ab2345fb6||1527914935||1527914935"><div class="col-md-8"><div class="row">
<script>
	var nbt_bookingObj = {"order_arr":[{"order":{"order_id":null,"ext_order_ref":null,"core_service_code":null,"service_category_code":null,"order_status_code":"N","airport_code":null,"cost":0,"ccy":null,"created_timestamp":"2018-06-02 02:48:55","out_of_hours":"N","total_cost":0,"total_cost_ccy":null,"last_amended_timestamp":"2018-06-02 02:48:55","booking_id":null,"late_booking":"N","late_booking_fee":0,"add_info":null,"from_db":"N"},"add_on_services_arr":[],"airport_event_arr":[],"limo_event":{"order_id":null,"direction_code":null,"units":null,"zone_id":null,"street_address":null,"town_city":null,"post_code":null,"additional_information":null,"from_db":"N"},"passenger_details":{"order_id":null,"lead_passenger_name":null,"signboard_message":null,"lead_passenger_mobile":null,"total_passengers":null,"total_infants":null,"from_db":"N"},"lounge_event":{"order_id":null,"entry_time":null,"from_db":"N"}}],"booking_transaction":{"booking_id":null,"booking_name":null,"booking_email":null,"booking_phone":null,"created_timestamp":"2018-06-02 02:48:55","last_amended_timestamp":"2018-06-02 02:48:55","booking_status_code":"N","total_cost":0,"ccy":null,"total_discount_amt":0,"fare_discount_amt":null,"season_discount_amt":null,"coupon_id":null,"processing_fee":0,"fare_type_id":null,"total_late_fees":0,"payment_amt":0,"gateway_code":"PP","from_db":"N"},"payment_event":{"booking_id":null,"payment_id":null,"state":null,"intent":null,"create_time":null,"last_response":null,"from_db":"N"}};
	var categories_arr = [{"code":"MNA","name":"VIP Meet & Assist","airport_code":"HAN"},{"code":"MNA","name":"VIP Meet & Assist","airport_code":"SGN"},{"code":"MNA","name":"VIP Meet & Assist","airport_code":"DAD"}];
</script>

<div class="form-horizontal category-submit-form" role="form" method="post">
	<input type="hidden" name="country_code" value="VNM">
	<input type="hidden" name="booking_sequence_id" value="1">
	<input type="hidden" name="order_index_no" value="0">
	
	<h3 id="country-title">VIP airport assistance for Vietnam</h3>
	
	<div class="form-group">
		<label for="airport_code">(1) Select the airport where we can assist you</label>
		<select name="airport_code" id="airport_code" class="form-control" required>
			<option value="DAD" <?= ($type=='DAD') ? 'selected' : '' ?> >Da Nang (DAD)</option>
			<option value="HAN" <?= ($type=='HAN') ? 'selected' : '' ?> >Hanoi (HAN)</option>
			<option value="SGN" <?= ($type=='SGN') ? 'selected' : '' ?> >Ho Chi Minh City (SGN)</option>
			<option value="CXR" <?= ($type=='CXR') ? 'selected' : '' ?> >Cam Ranh (CXR)</option>		</select>
	</div>
	<div class="form-group">
		<label for="airport_code">(2) Select the category of service you wish to book</label>
	</div>

	<div class="col-sm-4">
		<div class="category-button-wrap">
			<button type="submit" class="category-submit-button" name="meet-assist" id="meet-assist">
				<div class="category-submit">
					<div class="category-header">
						<h3>Meet and Assist</h3>
					</div>
				</div> 
			</button>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="category-button-wrap">		
			<button type="submit" class="category-submit-button" name="limousine" id="limousine" disabled>
				<div class="category-submit">
					<div class="category-header">
						<h3>Chauffeur Limousine</h3>
					</div>
				</div> 
			</button>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="category-button-wrap">
			<button type="submit" class="category-submit-button" name="lounge" id="lounge" disabled>
				<div class="category-submit">
					<div class="category-header">
						<h3>VIP Lounge Service</h3>
					</div>
				</div> 
			</button>
		</div><!-- end form inline -->
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
                  
                    <div class="booking-summary" data-summary="%7B%22total_cost%22%3A0%2C%22late_fees%22%3A0%2C%22processing_fee%22%3A0%2C%22season_discount_amt%22%3Anull%2C%22fare_discount_amt%22%3Anull%2C%22payment_amt%22%3A0%2C%22discount_amt%22%3A0%2C%22coupon_amt%22%3A0%7D">
                    <?php 
                    if (isset($_SESSION['booking_visa_gbvn'])) {
                    	$d = 0;
                    	foreach ($_SESSION['booking_visa_gbvn'] as $item) { 
                    		$d++;
                    ?>
                    <div class="order-summary" data-order-index="0"><h3>Order # <?= $d ?></h3>

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
                    </div>
                    <?php } } ?>
                  </div>
              </div>
			</div>
		</div></div></div><div class="col-md-12"><div class="row"><div class="booking-page-controls"></div></div></div></form></div>
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