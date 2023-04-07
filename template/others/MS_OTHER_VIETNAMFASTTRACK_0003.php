<?php 
	function send_arrival () {
		global $conn_vn;
		if (isset($_POST['service_arrival'])) {
			// var_dump($_POST);
			$name = $_POST['input_1'];
			$email = $_POST['input_2'];
			$country = $_POST['input_4'];
			$city = $_POST['input_5'];
			$arrival_date = $_POST['input_6'];
			$arrival_number = $_POST['input_7'];
			$arrival_landing_time = $_POST['input_8'];
			$lead_passenger_name = $_POST['input_9'];
			$welcome = $_POST['input_10'];
			$lead_passenger_mobile = $_POST['input_11'];
			$how_many = $_POST['input_12'];
			$children = $_POST['input_13'];
			$will = $_POST['input_14'];
			$if = $_POST['input_15'];
			$porter = $_POST['input_16'];
			$what = $_POST['input_17'];
			$want = $_POST['input_56'];
			$sql = "INSERT INTO arrival_only (name, email, country, city, arrival_date, arrival_number, arrival_landing_time, lead_passenger_name, welcome, lead_passenger_mobile, how_many, children, will, `if`, porter, what, want) VALUES ('$name', '$email', '$country', '$city', '$arrival_date', '$arrival_number', '$arrival_landing_time', '$lead_passenger_name', '$welcome', '$lead_passenger_mobile', '$how_many', '$children', '$will', '$if', '$porter', '$what', '$want')";
			// echo $sql;echo '<br><br>';
			$result = mysqli_query($conn_vn, $sql) or die('loi: '.mysqli_error($conn_vn));
			echo '<script type="text/javascript">alert(\'Bạn đã đăng ký thành công.\')</script>';
		}
	}
	send_arrival();
	function send_departure () {
		global $conn_vn;
		if (isset($_POST['service_departure'])) {
			// var_dump($_POST);
			$name = $_POST['input_1'];
			$email = $_POST['input_2'];
			$country = $_POST['input_26'];
			$city = $_POST['input_27'];
			$date = $_POST['input_28'];
			$flight_number = $_POST['input_29'];
			$time = $_POST['input_30'];
			$lead_passenger_name = $_POST['input_31'];
			$welcome = $_POST['input_32'];
			$lead_passenger_mobile = $_POST['input_33'];
			$total = $_POST['input_34'];
			$infants = $_POST['input_35'];
			$if = $_POST['input_37'];
			$porter = $_POST['input_38'];
			$what = $_POST['input_39'];
			$lounge = $_POST['input_73'];
			$want = $_POST['input_72'];

			$sql = "INSERT INTO departure_only (name, email, country, city, `date`, flight_number, `time`, lead_passenger_name, welcome, lead_passenger_mobile, total, infants, `if`, porter, what, lounge, want) VALUES ('$name', '$email', '$country', '$city', '$date', '$flight_number', '$time', '$lead_passenger_name', '$welcome', '$lead_passenger_mobile', '$total', '$infants', '$if', '$porter', '$what', '$lounge', '$want')";
			// echo $sql;echo '<br><br>';
			$result = mysqli_query($conn_vn, $sql) or die('loi: '.mysqli_error($conn_vn));
			echo '<script type="text/javascript">alert(\'Bạn đã đăng ký thành công.\')</script>';
		}
	}
	send_departure();
	function send_arrival_departure () {
		global $conn_vn;
		if (isset($_POST['service_arrival_departure'])) {
			// var_dump($_POST);
			$name = $_POST['input_1'];
			$email = $_POST['input_2'];
			$country = $_POST['input_4'];
			$city = $_POST['input_5'];
			$arrival_date = $_POST['input_6'];
			$arrival_number = $_POST['input_7'];
			$arrival_time = $_POST['input_8'];
			$total = $_POST['input_12'];
			$departure_date = $_POST['input_28'];
			$departure_number = $_POST['input_29'];
			$departure_time = $_POST['input_30'];
			$lounge = $_POST['input_71'];
			$lead_passenger_name = $_POST['input_9'];
			$welcome = $_POST['input_10'];
			$lead_passenger_mobile = $_POST['input_11'];
			$intants = $_POST['input_13'];
			$will = $_POST['input_14'];
			$if = $_POST['input_15'];
			$porter = $_POST['input_16'];
			$what = $_POST['input_17'];
			$want = $_POST['input_56'];

			$sql = "INSERT INTO arrival_departure (name, email, country, city, arrival_date, arrival_number, arrival_time, total, departure_date, departure_number, departure_time, lounge, lead_passenger_name, welcome, lead_passenger_mobile, infants, will, `if`, porter, what, want) VALUES ('$name', '$email', '$country', '$city', '$arrival_date', '$arrival_number', '$arrival_time', '$total', '$departure_date', '$departure_number', '$departure_time', '$lounge', '$lead_passenger_name', '$welcome', '$lead_passenger_mobile', '$intants', '$will', '$if', '$porter', '$what', '$want')";
			$result = mysqli_query($conn_vn, $sql) or die('loi: '.mysqli_error($conn_vn));
			echo '<script type="text/javascript">alert(\'Bạn đã đăng ký thành công.\')</script>';
		}
	}
	send_arrival_departure();
	function send_connection () {
		global $conn_vn;
		if (isset($_POST['service_connection'])) {
			// echo '<pre>';
			// var_dump($_POST);
			$name = $_POST['input_1'];
			$email = $_POST['input_2'];
			$country = $_POST['input_4'];
			$city = $_POST['input_5'];
			$arrival_date = $_POST['input_6'];
			$arrival_number = $_POST['input_7'];
			$arrival_time = $_POST['input_8'];
			$total = $_POST['input_12'];
			$departure_date = $_POST['input_28'];
			$departure_number = $_POST['input_29'];
			$departure_time = $_POST['input_30'];
			$lounge = $_POST['input_71'];
			$lead_passenger_name = $_POST['input_9'];
			$welcome = $_POST['input_10'];
			$lead_passenger_mobile = $_POST['input_11'];
			$intants = $_POST['input_13'];
			$will = $_POST['input_14'];
			$if = $_POST['input_15'];
			$porter = $_POST['input_16'];
			$what = $_POST['input_17'];
			$want = $_POST['input_56'];

			$sql = "INSERT INTO connection_transit (name, email, country, city, arrival_date, arrival_number, arrival_time, total, departure_date, departure_number, departure_time, lounge, lead_passenger_name, welcome, lead_passenger_mobile, infants, will, `if`, porter, what, want) VALUES ('$name', '$email', '$country', '$city', '$arrival_date', '$arrival_number', '$arrival_time', '$total', '$departure_date', '$departure_number', '$departure_time', '$lounge', '$lead_passenger_name', '$welcome', '$lead_passenger_mobile', '$intants', '$will', '$if', '$porter', '$what', '$want')";
			$result = mysqli_query($conn_vn, $sql) or die('loi: '.mysqli_error($conn_vn));
			echo '<script type="text/javascript">alert(\'Bạn đã đăng ký thành công.\')</script>';
		}
	}
	send_connection();

?>
<style type="text/css">
    #box-fix {
        position: fixed;
        bottom: 0px;
        right: 20px;
        height: 80px;
        padding: 28px 18px;
        border: 1px solid black;
        background-color: white;
        z-index: 9;
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
    #box-fix ul {
    	padding-left: 0;
    }
    @media (max-width: 768px) {
        #box-fix li {
            display: block;
            width: 100%;
        }
        #box-fix li:nth-child(1) {
            margin-bottom: 30px;
        }
        #box-fix {
        	height: 138px;
        }
    }
</style>


<link rel='stylesheet' id='googlefonts-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A500%7CNunito%3A400%2C700&#038;ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrapcss-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css?ver=4.9.6' type='text/css' media='all' />

<link rel="stylesheet" type="text/css" href="/css/book_email1.css">
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js?ver=1.12.4'></script>

<script type="text/javascript" src="/js/book_email3.js"></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?ver=4.9.6'></script>
<script type='text/javascript' src='https://dots2dashes.com/responsive-tabs.js?ver=4.9.6'></script>


<div canvas="container">

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <header id="masthead" class="site-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="aft-header">
                        <div class="site-branding">
                            <a href="/" rel="home">Asia Fast Track &#8211; VIP Airport Meet and Assist &#8211; Asia Pacific</a>
                        </div><!-- .site-branding -->

                        <div class="main-nav">
                            <button class="js-toggle-right-slidebar"><span class="glyphicon glyphicon-menu-hamburger"></span> <span>Menu</span></button>
                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                <div class="menu-main-menu-container"><ul id="primary-menu" class="menu"><li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-33"><a href="https://asiafasttrack.com/">Home</a></li>
<li id="menu-item-1183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1183"><a href="https://asiafasttrack.com/customers/">Clients</a></li>
<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="https://asiafasttrack.com/airports/">Airports</a></li>
<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="https://asiafasttrack.com/arrivals/">Arrivals</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="https://asiafasttrack.com/departures/">Departures</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="https://asiafasttrack.com/connections/">Connections</a></li>
<li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="https://asiafasttrack.com/payment/">Payment</a></li>
<li id="menu-item-400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-400"><a href="https://asiafasttrack.com/articles/">Blog</a></li>
<li id="menu-item-1236" class="book-now menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1236"><a href="https://asiafasttrack.com/#quote">Book Online or by E-mail</a></li>
</ul></div>                         </nav><!-- #site-navigation -->
                        </div> <!-- .main-nav -->
                    </div> <!-- .aft-header -->
                </div> <!-- .col-sm-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">

<div id="primary" class="content-area">
    <main id="main" class="site-main">

            <div class="section request-a-quote-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ask-order-book-wrapper">
                                <strong>Chat, Book or Request</strong>
                                <div class="contact-method-wrapper">
                                    
                                            <p class="contact-method">
                                                            <span>
                                                                <strong>Chat</strong> with our booking agent</span><a class="cta InviteToChat focalThemeButton" href="javascript:void(Tawk_API.toggle())">Live Chat</a></p>
                                            <p class="contact-method"><span><strong>Order</strong> your desired service</span><a class="cta launch-email-booking" href="#">Order Form</a></p>

                                            <p class="contact-method"><span><strong>Book Online</strong> See fare discounts</span><a class="cta " href="/book-now">Book Online</a></p>

                                            <p class="contact-method"><span><strong>Request a Quote.</strong> We reply by E-mail with cost & service information 🡻🡺</span></p>
                                            </div> <!-- .contact-method-wrapper -->
                                <!-- video removed -->



                                <!-- video removed -->
                            </div> <!-- .ask-order-book-wrapper -->
                        </div> <!-- .col-lg-6 -->
                        <div id="quote" class="col-lg-6">
                            <div class="request-quote-forms-wrapper">
                                <strong>Request a Quote</strong>

                                <ul class="nav nav-tabs responsive" id="myTab">
                                    <li><a data-toggle="tab" href="#rqarrival">ARRIVAL ONLY</a></li>
                                    <li><a data-toggle="tab" href="#rqdeparture">DEPARTURE  ONLY</a></li>
                                    <li><a data-toggle="tab" href="#rqboth">ARRIVAL & DEPARTURE</a></li>
                                    <li><a data-toggle="tab" href="#rqconnection">CONNECTION or TRANSIT</a></li>
                                </ul> <!-- .nav-tabs -->

                                <div class="tab-content responsive">
                                    <div id="rqarrival" class="tab-pane fade in">
                                        
                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_6' ><a id='gf_6' class='gform_anchor' ></a><form method='post' enctype='multipart/form-data' id='gform_6'  action=''>
                        <div class='gform_body'><ul id='gform_fields_6' class='gform_fields top_label form_sublabel_below description_below'><li id='field_6_1'  class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_1' >Your Name<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_1' id='input_6_1' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" required /></div></li><li id='field_6_2'  class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_2' >Your Email<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_2' id='input_6_2' type='email' value='' class='medium'     aria-required="true" aria-invalid="false" required />
                        </div></li><li id='field_6_4'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_4' >Country where you want the service</label><div class='ginput_container ginput_container_text'><input name='input_4' id='input_6_4' type='text' value='Việt Nam' class='medium'      aria-invalid="false" readonly /></div></li><li id='field_6_5'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_5' >City Name or 3 letter airport code</label><div class='ginput_container ginput_container_text'><input name='input_5' id='input_6_5' type='text' value='' class='medium'    placeholder='e.g. BKK, Bangkok'  aria-invalid="false" /></div></li><li id='field_6_6'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_6' >Arrival Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_6' id='input_6_6' type='text' value='' class='datepicker medium mdy datepicker_no_icon'   placeholder='MM/DD/YYYY'/>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_6_6' class='gform_hidden' value='https://asiafasttrack.com/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_6_7'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_7' >Arrival Flight - Airline &amp; Number</label><div class='ginput_container ginput_container_text'><input name='input_7' id='input_6_7' type='text' value='' class='medium'    placeholder='e.g. SQ234, BA007, CX852'  aria-invalid="false" /></div></li><li id='field_6_8'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_8' >Arrival Landing Time</label><div class='ginput_container ginput_container_text'><input name='input_8' id='input_6_8' type='text' value='' class='medium'    placeholder='e.g. 17.35, 5.35pm'  aria-invalid="false" /></div></li><li id='field_6_9'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_9' >Lead Passenger Name</label><div class='ginput_container ginput_container_text'><input name='input_9' id='input_6_9' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_6_10'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_10' >Welcome signboard should read</label><div class='ginput_container ginput_container_text'><input name='input_10' id='input_6_10' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_6_11'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_11' >Lead Passenger Cell/Mobile</label><div class='ginput_container ginput_container_text'><input name='input_11' id='input_6_11' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_6_12'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_12' >How many passenger in total?</label><div class='ginput_container ginput_container_select'><select name='input_12' id='input_6_12'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='1 Person' >1 Person</option><option value='2 Persons' >2 Persons</option><option value='3 Persons' >3 Persons</option><option value='4 Persons' >4 Persons</option><option value='5 Persons' >5 Persons</option><option value='6 Persons' >6 Persons</option><option value='7  Persons' >7  Persons</option><option value='8 Persons' >8 Persons</option><option value='9 Persons' >9 Persons</option><option value='More than 9' >More than 9</option></select></div></li><li id='field_6_13'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_13' >Any children below 24 months?</label><div class='ginput_container ginput_container_select'><select name='input_13' id='input_6_13'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='None' >None</option><option value='Yes - One infant' >Yes - One infant</option><option value='Yes - Two infants' >Yes - Two infants</option></select></div></li><li id='field_6_14'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_14' >Will any pax need Visa on Arrival?</label><div class='ginput_container ginput_container_select'><select name='input_14' id='input_6_14'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Yes. For all passengers' >Yes. For all passengers</option><option value='Yes. For some passengers' >Yes. For some passengers</option><option value='Not sure, please explain options' >Not sure, please explain options</option><option value='No. I have a visa' >No. I have a visa</option><option value='No. I don&#039;t need a visa' >No. I don&#039;t need a visa</option><option value='No. I will buy it myself' >No. I will buy it myself</option></select></div></li><li id='field_6_15'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_15' >Is a buggy required, if available?</label><div class='ginput_container ginput_container_select'><select name='input_15' id='input_6_15'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Yes. If available' >Yes. If available</option><option value='Maybe. Please quote' >Maybe. Please quote</option><option value='No. I will walk' >No. I will walk</option></select></div></li><li id='field_6_16'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_16' >Is a Baggage Porter needed?</label><div class='ginput_container ginput_container_select'><select name='input_16' id='input_6_16'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='No porterage required' >No porterage required</option><option value='Yes porterage help needed' >Yes porterage help needed</option><option value='Maybe. Please quote' >Maybe. Please quote</option></select></div></li><li id='field_6_17'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_17' >What Cabin Class is being used?</label><div class='ginput_container ginput_container_select'><select name='input_17' id='input_6_17'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Economy Class Cabin' >Economy Class Cabin</option><option value='Business Class Cabin' >Business Class Cabin</option><option value='First Class or Suite' >First Class or Suite</option><option value='It&#039;s a Low Cost Carrier' >It&#039;s a Low Cost Carrier</option><option value='Mix of different Cabins' >Mix of different Cabins</option></select></div></li><li id='field_6_56'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_6_56' >Do you want a quote? or would you like to book?</label><div class='ginput_container ginput_container_select'><select name='input_56' id='input_6_56'  class='large gfield_select'    aria-invalid="false"><option value='I am not sure. E Mail me the details.' >I am not sure. E Mail me the details.</option><option value='I know what I want. Send me an invoice.' >I know what I want. Send me an invoice.</option></select></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' name="service_arrival" id='gform_submit_button_6' class='gform_button button' value='Submit' /> <input type='hidden' name='gform_ajax' value='form_id=6&amp;title=&amp;description=&amp;tabindex=0' />
            <input type='hidden' class='gform_hidden' name='is_submit_6' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='6' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_6' value='WyJbXSIsIjJmM2E0NDlmNWIwYmYyYzIzN2ZhMmI2NzdiMThmMTFhIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_6' id='gform_target_page_number_6' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_6' id='gform_source_page_number_6' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div>
                
                                                    </div> <!-- #rqarrival -->

                                    <div id="rqdeparture" class="tab-pane fade in">
                                        
                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_7' ><a id='gf_7' class='gform_anchor' ></a><form method='post' enctype='multipart/form-data' id='gform_7'  action=''>
                        <div class='gform_body'><ul id='gform_fields_7' class='gform_fields top_label form_sublabel_below description_below'><li id='field_7_1'  class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_1' >Your Name<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_1' id='input_7_1' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" required /></div></li><li id='field_7_2'  class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_2' >Your Email<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_2' id='input_7_2' type='email' value='' class='medium'     aria-required="true" aria-invalid="false" required />
                        </div></li><li id='field_7_26'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_26' >Country where you want the service</label><div class='ginput_container ginput_container_text'><input name='input_26' id='input_7_26' type='text' value='Việt Nam' class='medium'      aria-invalid="false" readonly /></div></li><li id='field_7_27'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_27' >City Name or 3 letter airport code</label><div class='ginput_container ginput_container_text'><input name='input_27' id='input_7_27' type='text' value='' class='medium'    placeholder='e.g. BKK, Bangkok'  aria-invalid="false" /></div></li><li id='field_7_28'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_28' >Departure Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_28' id='input_7_28' type='text' value='' class='datepicker medium mdy datepicker_no_icon'   placeholder='MM/DD/YYYY'/>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_7_28' class='gform_hidden' value='https://asiafasttrack.com/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_7_29'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_29' >Departure Flight - Airline &amp; Number</label><div class='ginput_container ginput_container_text'><input name='input_29' id='input_7_29' type='text' value='' class='medium'    placeholder='e.g. SQ234, BA007, CX852'  aria-invalid="false" /></div></li><li id='field_7_30'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_30' >Time that flight departs</label><div class='ginput_container ginput_container_text'><input name='input_30' id='input_7_30' type='text' value='' class='medium'    placeholder='e.g. 17.35, 5.35pm'  aria-invalid="false" /></div></li><li id='field_7_31'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_31' >Lead Passenger Name</label><div class='ginput_container ginput_container_text'><input name='input_31' id='input_7_31' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_7_32'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_32' >Welcome signboard should read</label><div class='ginput_container ginput_container_text'><input name='input_32' id='input_7_32' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_7_33'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_33' >Lead Passenger Cell/Mobile</label><div class='ginput_container ginput_container_text'><input name='input_33' id='input_7_33' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_7_34'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_34' >Total passengers? (including infants)</label><div class='ginput_container ginput_container_select'><select name='input_34' id='input_7_34'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='1 Person' >1 Person</option><option value='2 Persons' >2 Persons</option><option value='3 Persons' >3 Persons</option><option value='4 Persons' >4 Persons</option><option value='5 Persons' >5 Persons</option><option value='6 Persons' >6 Persons</option><option value='7  Persons' >7  Persons</option><option value='8 Persons' >8 Persons</option><option value='9 Persons' >9 Persons</option><option value='More than 9' >More than 9</option></select></div></li><li id='field_7_35'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_35' >Any infants below 24 months?</label><div class='ginput_container ginput_container_select'><select name='input_35' id='input_7_35'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='None' >None</option><option value='One infant is included in total number' >One infant is included in total number</option><option value='Two infants are included in total number' >Two infants are included in total number</option></select></div></li><li id='field_7_37'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_37' >Is a buggy required, if available?</label><div class='ginput_container ginput_container_select'><select name='input_37' id='input_7_37'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Yes. If available' >Yes. If available</option><option value='Maybe. Please quote' >Maybe. Please quote</option><option value='No. I will walk' >No. I will walk</option></select></div></li><li id='field_7_38'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_38' >Is a Baggage Porter needed?</label><div class='ginput_container ginput_container_select'><select name='input_38' id='input_7_38'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='No porterage required' >No porterage required</option><option value='Yes porterage help needed' >Yes porterage help needed</option><option value='Maybe. Please quote' >Maybe. Please quote</option></select></div></li><li id='field_7_39'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_39' >What Cabin Class is being used?</label><div class='ginput_container ginput_container_select'><select name='input_39' id='input_7_39'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Economy Class Cabin' >Economy Class Cabin</option><option value='Business Class Cabin' >Business Class Cabin</option><option value='First Class or Suite' >First Class or Suite</option><option value='It&#039;s a Low Cost Carrier' >It&#039;s a Low Cost Carrier</option><option value='Mix of different Cabins' >Mix of different Cabins</option></select></div></li><li id='field_7_73'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_73' >Lounge on departure? (costs extra)</label><div class='ginput_container ginput_container_select'><select name='input_73' id='input_7_73'  class='medium gfield_select'    aria-invalid="false"><option value='No - Thank you but I do not need lounge access' >No - Thank you but I do not need lounge access</option><option value='Maybe - send me departure lounge information' >Maybe - send me departure lounge information</option></select></div></li><li id='field_7_72'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_7_72' >Do you want a quote? or would you like to book?</label><div class='ginput_container ginput_container_select'><select name='input_72' id='input_7_72'  class='large gfield_select'    aria-invalid="false"><option value='I am not sure. E Mail me the details.' >I am not sure. E Mail me the details.</option><option value='I know what I want. Send me an invoice.' >I know what I want. Send me an invoice.</option></select></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' name="service_departure" id='gform_submit_button_7' class='gform_button button' value='Submit' /> <input type='hidden' name='gform_ajax' value='form_id=7&amp;title=&amp;description=&amp;tabindex=0' />
            <input type='hidden' class='gform_hidden' name='is_submit_7' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='7' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_7' value='WyJbXSIsIjJmM2E0NDlmNWIwYmYyYzIzN2ZhMmI2NzdiMThmMTFhIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_7' id='gform_target_page_number_7' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_7' id='gform_source_page_number_7' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div>
                                                    </div> <!-- #rqdeparture -->

                                    <div id="rqboth" class="tab-pane fade in">
                                        
                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_5' ><a id='gf_5' class='gform_anchor' ></a><form method='post' enctype='multipart/form-data' id='gform_5'  action=''>
                        <div class='gform_body'><ul id='gform_fields_5' class='gform_fields top_label form_sublabel_below description_below'><li id='field_5_1'  class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_1' >Your Name<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_1' id='input_5_1' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" required /></div></li><li id='field_5_2'  class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_2' >Your Email<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_2' id='input_5_2' type='email' value='' class='medium'     aria-required="true" aria-invalid="false" required />
                        </div></li><li id='field_5_4'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_4' >Country where you want the service</label><div class='ginput_container ginput_container_text'><input name='input_4' id='input_5_4' type='text' value='Việt Nam' class='medium'      aria-invalid="false" readonly /></div></li><li id='field_5_5'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_5' >City Name or 3 letter airport code</label><div class='ginput_container ginput_container_text'><input name='input_5' id='input_5_5' type='text' value='' class='medium'    placeholder='e.g. BKK, Bangkok'  aria-invalid="false" /></div></li><li id='field_5_6'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_6' >Arrival Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_6' id='input_5_6' type='text' value='' class='datepicker medium mdy datepicker_no_icon'   placeholder='MM/DD/YYYY'/>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_5_6' class='gform_hidden' value='https://asiafasttrack.com/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_5_7'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_7' >Arrival Flight - Airline &amp; Number</label><div class='ginput_container ginput_container_text'><input name='input_7' id='input_5_7' type='text' value='' class='medium'    placeholder='e.g. SQ234, BA007, CX852'  aria-invalid="false" /></div></li><li id='field_5_8'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_8' >Arrival Landing Time</label><div class='ginput_container ginput_container_text'><input name='input_8' id='input_5_8' type='text' value='' class='medium'    placeholder='e.g. 17.35, 5.35pm'  aria-invalid="false" /></div></li><li id='field_5_12'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_12' >Total passengers? (include infants)</label><div class='ginput_container ginput_container_select'><select name='input_12' id='input_5_12'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='1 Person' >1 Person</option><option value='2 Persons' >2 Persons</option><option value='3 Persons' >3 Persons</option><option value='4 Persons' >4 Persons</option><option value='5 Persons' >5 Persons</option><option value='6 Persons' >6 Persons</option><option value='7  Persons' >7  Persons</option><option value='8 Persons' >8 Persons</option><option value='9 Persons' >9 Persons</option><option value='More than 9' >More than 9</option></select></div></li><li id='field_5_28'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_28' >Departure Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_28' id='input_5_28' type='text' value='' class='datepicker medium mdy datepicker_no_icon'   placeholder='MM/DD/YYYY'/>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_5_28' class='gform_hidden' value='https://asiafasttrack.com/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_5_29'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_29' >Departure Flight - Airline &amp; Number</label><div class='ginput_container ginput_container_text'><input name='input_29' id='input_5_29' type='text' value='' class='medium'    placeholder='e.g. SQ234, BA007, CX852'  aria-invalid="false" /></div></li><li id='field_5_30'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_30' >Time that flight departs</label><div class='ginput_container ginput_container_text'><input name='input_30' id='input_5_30' type='text' value='' class='medium'    placeholder='e.g. 17.35, 5.35pm'  aria-invalid="false" /></div></li><li id='field_5_71'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_71' >Lounge on departure? (costs extra)</label><div class='ginput_container ginput_container_select'><select name='input_71' id='input_5_71'  class='medium gfield_select'    aria-invalid="false"><option value='No - Thank you but I do not need lounge access' >No - Thank you but I do not need lounge access</option><option value='Maybe - send me departure lounge information' >Maybe - send me departure lounge information</option></select></div></li><li id='field_5_9'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_9' >Lead Passenger Name</label><div class='ginput_container ginput_container_text'><input name='input_9' id='input_5_9' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_5_10'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_10' >Welcome signboard should read</label><div class='ginput_container ginput_container_text'><input name='input_10' id='input_5_10' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_5_11'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_11' >Lead Passenger Cell/Mobile</label><div class='ginput_container ginput_container_text'><input name='input_11' id='input_5_11' type='text' value='' class='medium'    placeholder='e.g. +1 204 555 6789'  aria-invalid="false" /></div></li><li id='field_5_13'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_13' >Any infants below 24 months?</label><div class='ginput_container ginput_container_select'><select name='input_13' id='input_5_13'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='None' >None</option><option value='One infant already included in passenger number' >One infant already included in passenger number</option><option value='Two infants already included in passenger number' >Two infants already included in passenger number</option></select></div></li><li id='field_5_14'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_14' >Will any pax need Visa on Arrival?</label><div class='ginput_container ginput_container_select'><select name='input_14' id='input_5_14'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Yes. For all passengers' >Yes. For all passengers</option><option value='Yes. For some passengers' >Yes. For some passengers</option><option value='No, its a connection service' >No, its a connection service</option><option value='Not sure, please explain options' >Not sure, please explain options</option><option value='No. I / We will have a visa' >No. I / We will have a visa</option><option value='No. I / We don&#039;t need a visa' >No. I / We don&#039;t need a visa</option><option value='No. I will buy it myself' >No. I will buy it myself</option></select></div></li><li id='field_5_15'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_15' >Is a buggy required, if available?</label><div class='ginput_container ginput_container_select'><select name='input_15' id='input_5_15'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Yes. If available' >Yes. If available</option><option value='Maybe. Please quote' >Maybe. Please quote</option><option value='No. I will walk' >No. I will walk</option></select></div></li><li id='field_5_16'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_16' >Is a Baggage Porter needed?</label><div class='ginput_container ginput_container_select'><select name='input_16' id='input_5_16'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='No porterage required' >No porterage required</option><option value='Yes porterage help needed' >Yes porterage help needed</option><option value='Maybe. Please quote' >Maybe. Please quote</option></select></div></li><li id='field_5_17'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_17' >What Cabin Class is being used?</label><div class='ginput_container ginput_container_select'><select name='input_17' id='input_5_17'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Economy Class Cabin' >Economy Class Cabin</option><option value='Business Class Cabin' >Business Class Cabin</option><option value='First Class or Suite' >First Class or Suite</option><option value='It&#039;s a Low Cost Carrier' >It&#039;s a Low Cost Carrier</option><option value='Mix of different Cabins' >Mix of different Cabins</option></select></div></li><li id='field_5_56'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_5_56' >Do you want a quote? or would you like to book?</label><div class='ginput_container ginput_container_select'><select name='input_56' id='input_5_56'  class='large gfield_select'    aria-invalid="false"><option value='I am not sure. E Mail me the details.' >I am not sure. E Mail me the details.</option><option value='I know what I want. Send me an invoice.' >I know what I want. Send me an invoice.</option></select></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' name="service_arrival_departure" id='gform_submit_button_5' class='gform_button button' value='Submit' /> <input type='hidden' name='gform_ajax' value='form_id=5&amp;title=&amp;description=&amp;tabindex=0' />
            <input type='hidden' class='gform_hidden' name='is_submit_5' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='5' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_5' value='WyJbXSIsIjJmM2E0NDlmNWIwYmYyYzIzN2ZhMmI2NzdiMThmMTFhIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_5' id='gform_target_page_number_5' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_5' id='gform_source_page_number_5' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div>
                                                    </div> <!-- #rqboth -->
                                    <div id="rqconnection" class="tab-pane fade in">
                                        
                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_9' ><a id='gf_9' class='gform_anchor' ></a><form method='post' enctype='multipart/form-data' id='gform_9'  action=''>
                        <div class='gform_body'><ul id='gform_fields_9' class='gform_fields top_label form_sublabel_below description_below'><li id='field_9_1'  class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_1' >Your Name<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_1' id='input_9_1' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" required /></div></li><li id='field_9_2'  class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_2' >Your Email<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_2' id='input_9_2' type='email' value='' class='medium'     aria-required="true" aria-invalid="false" required />
                        </div></li><li id='field_9_4'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_4' >Country where you want the service</label><div class='ginput_container ginput_container_text'><input name='input_4' id='input_9_4' type='text' value='Việt Nam' class='medium'      aria-invalid="false" readonly /></div></li><li id='field_9_5'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_5' >City Name or 3 letter airport code</label><div class='ginput_container ginput_container_text'><input name='input_5' id='input_9_5' type='text' value='' class='medium'    placeholder='e.g. BKK, Bangkok'  aria-invalid="false" /></div></li><li id='field_9_6'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_6' >Arrival Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_6' id='input_9_6' type='text' value='' class='datepicker medium mdy datepicker_no_icon'   placeholder='MM/DD/YYYY'/>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_9_6' class='gform_hidden' value='https://asiafasttrack.com/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_9_7'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_7' >Arrival Flight - Airline &amp; Number</label><div class='ginput_container ginput_container_text'><input name='input_7' id='input_9_7' type='text' value='' class='medium'    placeholder='e.g. SQ234, BA007, CX852'  aria-invalid="false" /></div></li><li id='field_9_8'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_8' >Arrival Landing Time</label><div class='ginput_container ginput_container_text'><input name='input_8' id='input_9_8' type='text' value='' class='medium'    placeholder='e.g. 17.35, 5.35pm'  aria-invalid="false" /></div></li><li id='field_9_12'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_12' >Total passengers? (include infants)</label><div class='ginput_container ginput_container_select'><select name='input_12' id='input_9_12'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='1 Person' >1 Person</option><option value='2 Persons' >2 Persons</option><option value='3 Persons' >3 Persons</option><option value='4 Persons' >4 Persons</option><option value='5 Persons' >5 Persons</option><option value='6 Persons' >6 Persons</option><option value='7  Persons' >7  Persons</option><option value='8 Persons' >8 Persons</option><option value='9 Persons' >9 Persons</option><option value='More than 9' >More than 9</option></select></div></li><li id='field_9_28'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_28' >Departure Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_28' id='input_9_28' type='text' value='' class='datepicker medium mdy datepicker_no_icon'   placeholder='MM/DD/YYYY'/>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_9_28' class='gform_hidden' value='https://asiafasttrack.com/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_9_29'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_29' >Departure Flight - Airline &amp; Number</label><div class='ginput_container ginput_container_text'><input name='input_29' id='input_9_29' type='text' value='' class='medium'    placeholder='e.g. SQ234, BA007, CX852'  aria-invalid="false" /></div></li><li id='field_9_30'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_30' >Time that flight departs</label><div class='ginput_container ginput_container_text'><input name='input_30' id='input_9_30' type='text' value='' class='medium'    placeholder='e.g. 17.35, 5.35pm'  aria-invalid="false" /></div></li><li id='field_9_71'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_71' >Lounge on departure? (costs extra)</label><div class='ginput_container ginput_container_select'><select name='input_71' id='input_9_71'  class='medium gfield_select'    aria-invalid="false"><option value='No - Thank you but I do not need lounge access' >No - Thank you but I do not need lounge access</option><option value='Maybe - send me departure lounge information' >Maybe - send me departure lounge information</option></select></div></li><li id='field_9_9'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_9' >Lead Passenger Name</label><div class='ginput_container ginput_container_text'><input name='input_9' id='input_9_9' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_9_10'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_10' >Welcome signboard should read</label><div class='ginput_container ginput_container_text'><input name='input_10' id='input_9_10' type='text' value='' class='medium'      aria-invalid="false" /></div></li><li id='field_9_11'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_11' >Lead Passenger Cell/Mobile</label><div class='ginput_container ginput_container_text'><input name='input_11' id='input_9_11' type='text' value='' class='medium'    placeholder='e.g. +1 204 555 6789'  aria-invalid="false" /></div></li><li id='field_9_13'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_13' >Any infants below 24 months?</label><div class='ginput_container ginput_container_select'><select name='input_13' id='input_9_13'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='None' >None</option><option value='One infant already included in passenger number' >One infant already included in passenger number</option><option value='Two infants already included in passenger number' >Two infants already included in passenger number</option></select></div></li><li id='field_9_14'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_14' >Will any pax need Visa on Arrival?</label><div class='ginput_container ginput_container_select'><select name='input_14' id='input_9_14'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Yes. For all passengers' >Yes. For all passengers</option><option value='Yes. For some passengers' >Yes. For some passengers</option><option value='No, its a connection service' >No, its a connection service</option><option value='Not sure, please explain options' >Not sure, please explain options</option><option value='No. I / We will have a visa' >No. I / We will have a visa</option><option value='No. I / We don&#039;t need a visa' >No. I / We don&#039;t need a visa</option><option value='No. I will buy it myself' >No. I will buy it myself</option></select></div></li><li id='field_9_15'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_15' >Is a buggy required, if available?</label><div class='ginput_container ginput_container_select'><select name='input_15' id='input_9_15'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Yes. If available' >Yes. If available</option><option value='Maybe. Please quote' >Maybe. Please quote</option><option value='No. I will walk' >No. I will walk</option></select></div></li><li id='field_9_16'  class='gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_16' >Is a Baggage Porter needed?</label><div class='ginput_container ginput_container_select'><select name='input_16' id='input_9_16'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='No porterage required' >No porterage required</option><option value='Yes porterage help needed' >Yes porterage help needed</option><option value='Maybe. Please quote' >Maybe. Please quote</option></select></div></li><li id='field_9_17'  class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_17' >What Cabin Class is being used?</label><div class='ginput_container ginput_container_select'><select name='input_17' id='input_9_17'  class='medium gfield_select'    aria-invalid="false"><option value='Please Select...' >Please Select...</option><option value='Economy Class Cabin' >Economy Class Cabin</option><option value='Business Class Cabin' >Business Class Cabin</option><option value='First Class or Suite' >First Class or Suite</option><option value='It&#039;s a Low Cost Carrier' >It&#039;s a Low Cost Carrier</option><option value='Mix of different Cabins' >Mix of different Cabins</option></select></div></li><li id='field_9_56'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_56' >Do you want a quote? or would you like to book?</label><div class='ginput_container ginput_container_select'><select name='input_56' id='input_9_56'  class='large gfield_select'    aria-invalid="false"><option value='I am not sure. E Mail me the details.' >I am not sure. E Mail me the details.</option><option value='I know what I want. Send me an invoice.' >I know what I want. Send me an invoice.</option></select></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' name="service_connection" id='gform_submit_button_9' class='gform_button button' value='Submit' /> <input type='hidden' name='gform_ajax' value='form_id=9&amp;title=&amp;description=&amp;tabindex=0' />
            <input type='hidden' class='gform_hidden' name='is_submit_9' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='9' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_9' value='WyJbXSIsIjJmM2E0NDlmNWIwYmYyYzIzN2ZhMmI2NzdiMThmMTFhIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_9' id='gform_target_page_number_9' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_9' id='gform_source_page_number_9' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div>
                                                    </div> <!-- #rqconnection -->
                                </div> <!-- .tab-content -->
                            </div> <!-- .request-quote-forms-wrapper -->

                            <div class="contact-infos">

                                <h5>Company Information</h5>
                                    <dl>
                                            <dt>Address:</dt>
                                            <dd>sannam building, Cau Giay District, Hanoi, Vietnam</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:contact@vietnamfasttrack.org">contact@vietnamfasttrack.org</a></dd>
                                    </dl>                                
                            </div> <!-- .contact-infos -->


                        </div> <!-- .col-lg-6 -->
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </div> <!-- .request-a-quote-section -->

        
    </main><!-- #main -->
</div><!-- #primary -->


    </div><!-- #content -->

    <footer id="colophon" class="site-footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 footer-widget-title">
                    <section id="text-2" class="widget footer-widget text-center widget_text"><strong class="widget-title">Airport Meet and Greet. A First Class experience at the start and end of every flight.</strong>          <div class="textwidget"></div>
        </section>              </div> <!-- .col-sm-12 -->

                <div class="col-sm-4">
                    <section id="nav_menu-2" class="widget footer-widget widget_nav_menu"><strong class="widget-title">Page Information</strong><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-129"><a href="https://asiafasttrack.com/">Home</a></li>
<li id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"><a href="https://asiafasttrack.com/airports/">Airports</a></li>
<li id="menu-item-131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-131"><a href="https://asiafasttrack.com/arrivals/">Arrivals</a></li>
<li id="menu-item-132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-132"><a href="https://asiafasttrack.com/departures/">Departures</a></li>
<li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href="https://asiafasttrack.com/connections/">Connections</a></li>
<li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a href="https://asiafasttrack.com/payment/">Payment</a></li>
<li id="menu-item-137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137"><a href="https://asiafasttrack.com/about-us/">About us</a></li>
<li id="menu-item-1235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1235"><a href="https://asiafasttrack.com/#quote">Contact us</a></li>
<li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="https://asiafasttrack.com/frequently-asked-questions/">FAQs</a></li>
<li id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456"><a href="https://asiafasttrack.com/terms-conditions/">Terms &#038; Conditions</a></li>
<li id="menu-item-1096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1096"><a href="https://asiafasttrack.com/#quote">Request a Quote</a></li>
<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-274"><a href="https://asiafasttrack.com/articles/">Articles &#038; Blog</a></li>
</ul></div></section><section id="text-3" class="widget footer-widget widget_text"><strong class="widget-title">Company Information</strong>            <div class="textwidget"><p>Groundbooker Limited.  British owned and managed. Registered Office Level 2, Lazenda Commercial Centre, Labuan 87007.</p>
<p>Email  <a href="mailto:contact@asiafasttrack.com">contact@asiafasttrack.com</a>:</p>
</div>
        </section><section id="nav_menu-3" class="widget footer-widget widget_nav_menu"><div class="menu-social-menu-container"><ul id="menu-social-menu" class="menu"><li id="menu-item-127" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-127"><a target="_blank" href="https://www.youtube.com/channel/UCa5FCScoTcQbNNMONazn9jg">YouTube |</a></li>
<li id="menu-item-128" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-128"><a target="_blank" href="https://www.linkedin.com/company/asiafasttrack/">LinkedIn</a></li>
</ul></div></section>               </div> <!-- .col-sm-4 -->

                <div id="register" class="col-sm-4">
                    <section id="gform_widget-2" class="widget footer-widget gform_widget"><strong class="widget-title">Register for Commission</strong>
                    
                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_4' ><a id='gf_4' class='gform_anchor' ></a><form method='post' enctype='multipart/form-data' target='gform_ajax_frame_4' id='gform_4'  action='/request-quote-headless/?ft_local_country_code=VNM#gf_4'>
                        <div class='gform_body'><ul id='gform_fields_4' class='gform_fields top_label form_sublabel_below description_below'><li id='field_4_1'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_4_1' >Your name<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_text'><input name='input_1' id='input_4_1' type='text' value='' class='large'    placeholder='Ms Jane Smith' aria-required="true" aria-invalid="false" /></div><div class='gfield_description'>This is just for us to correctly address you</div></li><li id='field_4_2'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_4_2' >Your E-mail address<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_2' id='input_4_2' type='text' value='' class='large'    placeholder='janesmith@gmail.com' aria-required="true" aria-invalid="false"/>
                        </div><div class='gfield_description'>Use the E-mail address that is associated with a PayPal account into which you want to receive commission... <a href="https://asiafasttrack.com/commission_rules.htm" target="_blank">more</a></div></li><li id='field_4_3'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_4_3' >Name of your business</label><div class='ginput_container ginput_container_text'><input name='input_3' id='input_4_3' type='text' value='' class='large'      aria-invalid="false" /></div><div class='gfield_description'>If you will claim commission for yourself, no need to fill in.</div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_4' class='gform_button button' value='Register'  onclick='if(window["gf_submitting_4"]){return false;}  window["gf_submitting_4"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_4"]){return false;} window["gf_submitting_4"]=true;  jQuery("#gform_4").trigger("submit",[true]); }' /> <input type='hidden' name='gform_ajax' value='form_id=4&amp;title=&amp;description=&amp;tabindex=0' />
            <input type='hidden' class='gform_hidden' name='is_submit_4' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='4' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_4' value='WyJbXSIsIjJmM2E0NDlmNWIwYmYyYzIzN2ZhMmI2NzdiMThmMTFhIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_4' id='gform_target_page_number_4' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_4' id='gform_source_page_number_4' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div>
                </section>              </div> <!-- .col-sm-4 -->

                <div class="col-sm-4">
                    <section id="text-4" class="widget footer-widget widget_text"><strong class="widget-title">Subscribe to our Newsletter</strong>         <div class="textwidget"><p class="p1"><span class="s1">Receive quarterly news about our services,  locations, and </span><span class="s2">offers.  </span></p>
<p class="p1"><span class="s2">The subscription is free. You can unsubscribe any time.</span></p>
</div>
        </section><section id="mc4wp_form_widget-2" class="widget footer-widget widget_mc4wp_form_widget">
        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-141" method="post" data-id="141" data-name="" ><div class="mc4wp-form-fields"><p>
    <input type="text" name="NAME" placeholder="Your name" required />
</p>

<p>
    <input type="email" name="EMAIL" placeholder="Your email address" required />
</p>

<p>
    <input type="submit" value="Sign up" />
</p>
</div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1529113944" /><input type="hidden" name="_mc4wp_form_id" value="141" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin --></section>              </div> <!-- .col-sm-4 -->
            </div> <!-- .row -->
        </div> <!-- .container -->

        <div class="site-info">
            <div class="container">
                <p>&copy; Copyright 2008 -  2018 Groundbooker Limited | All rights reserved.</p>
            </div> <!-- .container -->
        </div><!-- .site-info -->


        
    </footer><!-- #colophon -->
</div><!-- #page -->

</div> <!-- div canvas -->

<div class="quote-chat-wrapper">
    <section id="nav_menu-4" class="widget quote-chat-widget widget_nav_menu"><div class="menu-quote-and-chat-buttons-container"><ul id="menu-quote-and-chat-buttons" class="menu"><li id="menu-item-1088" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1088"><a href="https://asiafasttrack.com/#quote">Order by E-mail</a></li>
<li id="menu-item-144" class="addFocalScopeChat menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="#">Chat with Agent</a></li>
</ul></div></section></div> <!-- .quote-chat-wrapper -->

<div off-canvas="slidebar-2 right shift">

    <div class="menu-mobile-menu-container"><ul id="mobile-menu" class="menu"><li id="menu-item-826" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-826"><a href="https://asiafasttrack.com/">Home</a></li>
<li id="menu-item-1188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1188"><a href="https://asiafasttrack.com/customers/">Clients</a></li>
<li id="menu-item-827" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-827"><a href="https://asiafasttrack.com/airports/">Airports</a></li>
<li id="menu-item-828" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-828"><a href="https://asiafasttrack.com/arrivals/">Arrivals</a></li>
<li id="menu-item-829" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-829"><a href="https://asiafasttrack.com/departures/">Departures</a></li>
<li id="menu-item-830" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-830"><a href="https://asiafasttrack.com/connections/">Connections</a></li>
<li id="menu-item-831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-831"><a href="https://asiafasttrack.com/payment/">Payment</a></li>
<li id="menu-item-832" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-832"><a href="https://asiafasttrack.com/frequently-asked-questions/">FAQ</a></li>
<li id="menu-item-1246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1246"><a href="https://asiafasttrack.com/#quote">Request a Quote</a></li>
<li id="menu-item-834" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-834"><a href="https://asiafasttrack.com/terms-conditions/">Terms &#038; Conditions</a></li>
<li id="menu-item-835" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-835"><a href="https://asiafasttrack.com/about-us/">About us</a></li>
<li id="menu-item-1245" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1245"><a href="https://asiafasttrack.com/#quote">Contact us</a></li>
<li id="menu-item-839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-839"><a href="https://asiafasttrack.com/calculator-tool/">Calculator Tool</a></li>
<li id="menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840"><a href="https://asiafasttrack.com/service-descriptions/">Service Descriptions</a></li>
<li id="menu-item-838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-838"><a href="https://asiafasttrack.com/articles/">Blog</a></li>
</ul></div>
</div>
<div id="box-fix">
    <div>
        <ul>
            <li><a href="/bookonline" style="background-color: #FAA523;">Order By Email</a></li>
            <li><a href="javascript:void(Tawk_API.toggle())" style="background-color: #00497F;" class="InviteToChat focalThemeButton">Online Support</a></li>
        </ul>
    </div>
</div>
<script>(function() {function addEventListener(element,event,handler) {
    if(element.addEventListener) {
        element.addEventListener(event,handler, false);
    } else if(element.attachEvent){
        element.attachEvent('on'+event,handler);
    }
}function maybePrefixUrlField() {
    if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
        this.value = "http://" + this.value;
    }
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
    for( var j=0; j < urlFields.length; j++ ) {
        addEventListener(urlFields[j],'blur',maybePrefixUrlField);
    }
}/* test if browser supports date fields */
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {

    /* add placeholder & pattern to all date fields */
    var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
    for(var i=0; i<dateFields.length; i++) {
        if(!dateFields[i].placeholder) {
            dateFields[i].placeholder = 'YYYY-MM-DD';
        }
        if(!dateFields[i].pattern) {
            dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
        }
    }
}

})();</script>

<link rel="stylesheet" type="text/css" href="/css/book_email2.css">
<script type="text/javascript" src="/js/book_email1.js"></script>
<script type="text/javascript" src="/js/book_email2.js"></script>
<script>

    jQuery('body').hide();
    jQuery(document).ready(function () {
        jQuery('#masthead').hide();
        jQuery('.page-hero').hide();
        jQuery('.intro-section').hide();
        jQuery('.services-section').hide();
        jQuery('.how-to-book-section').hide();
        jQuery('.booking-section').hide();
        jQuery('.testimonials-section').hide();
        jQuery('.airport-list-section').hide();
        jQuery('#colophon').hide();
        jQuery('.quote-chat-wrapper').hide();
        jQuery('body').show();
    });

    jQuery(".cta.InviteToChat.focalThemeButton").click( function () {
        setTimeout(function () {
            jQuery('body').each(function () {
                console.log(jQuery(this).children('div').length);
                jQuery(this).children('div').each(function () {
                    console.log(jQuery(this).attr('id'));
                    console.log(jQuery(this).children('iframe').length);
                    if (jQuery(this).children('iframe').length > 3) {
                        console.log(jQuery(this).attr('id') + 'setting bottom');
                        jQuery(this).css('bottom', '50%');
                    }
                });
            });
        }, 2000);
    });

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