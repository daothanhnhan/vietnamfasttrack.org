<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
<?php 
    function check_price () {
        if (isset($_POST['book-now'])) {
            // var_dump($_POST);die;
            if (isset($_SESSION['booking_visa_gbvn'])) {
                unset($_SESSION['booking_visa_gbvn']);
            }
            $_SESSION['booking_visa_gbvn'][0]['airport_code'] = $_POST['nbt-calculator-airport-code'];
            $type = strtolower($_POST['nbt-calculator-core-service-code']);
            $_SESSION['booking_visa_gbvn'][0]['type'] = $type;
            $total = (int)substr($_POST['nbt-calculator-price'], 4);
            if ($type == 'arr') {
                $_SESSION['booking_visa_gbvn'][0]['ARR_total_passengers'] = $_POST['nbt-calculator-pax'];
                $_SESSION['booking_visa_gbvn'][0]['ARR_subtotal'] = $total;
            }
            if ($type == 'dep') {
                $_SESSION['booking_visa_gbvn'][0]['DEP_total_passengers'] = $_POST['nbt-calculator-pax'];
                $_SESSION['booking_visa_gbvn'][0]['DEP_subtotal'] = $total;
            }
            if ($type == 'cn2f') {
                 $_SESSION['booking_visa_gbvn'][0]['CN2F_total_passengers'] = $_POST['nbt-calculator-pax'];
                 $_SESSION['booking_visa_gbvn'][0]['CN2F_subtotal'] = $total;
            }
            
            // var_dump($_SESSION['booking_visa_gbvn']);die;
            header('location: /book-now1');
            
        }
    }
    check_price();
?>
<!-- <link rel='stylesheet' id='national-booking.css-css'  href='https://groundbooker.net/wordpress/wp-content/plugins/national-booking/css/national-booking.css?ver=4.9.5' media='all' />
<link rel='stylesheet' id='html5blank-child-css'  href='https://groundbooker.net/wordpress/wp-content/themes/national-booking-tool-aft2017/style.css?ver=1.0' media='all' /> -->
<link rel="stylesheet" type="text/css" href="/css/check_price_1.css">
<link rel="stylesheet" type="text/css" href="/css/check_price_2.css">
<style type="text/css">
    .nbt-button-lg {
        padding: 0;
    }
</style>

<div class="container" style="margin-top: 0 !important;">
    <div class="row nbt-header-navigation">
        <div class="col-md-4">
            <div class="nbt-col-center top-action-button">
                <a href="" class="btn btn-md nbt-start-over-btn"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Start over or change country</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="nbt-col-center top-action-button">
                <a href="" target="_blank" class="btn btn-md nbt-service-description-btn"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span>Service description for each airport</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="nbt-col-center top-action-button addFocalScopeChat">
                <a href="#" class="btn btn-md nbt-chat-online-btn"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>Chat with an agent</a>
            </div>
        </div>
    </div>

	<div class="container_inner default_template_holder clearfix page_container_inner" style="margin-top: 0 !important;">

	<div class="nbt-page-structure container"><form id="nbt_booking_form" method="POST" action=""><div class="col-md-12"><div class="row"><div class="pane nbt-calculator-pane nbt-page-structure-container">
    <div class="form-horizontal">
        <div class="nbt-calculator-inner">
            <div class="form-group">
                <input type="button" name="nbt-calculator-check-price-btn" id="nbt-calculator-check-price-btn" value="Check a Price" class="form-control" readonly>
            </div>
            <div class="form-group">
                <select name="nbt-calculator-country-code" id="nbt-calculator-country-code" class="form-control">
                    <option value="VNM" selected="selected">Vietnam</option>                </select>
            </div>
            <div class="form-group">
                <select name="nbt-calculator-airport-code" id="nbt-calculator-airport-code" class="form-control">
                    <option value="DAD">Da Nang (DAD)</option>
                    <option value="HAN">Hanoi (HAN)</option>
                    <option value="SGN">Ho Chi Minh City (SGN)</option>
                    <option value="CXR">Cam Ranh (CXR)</option>
                </select>
            </div>
            <div class="form-group">
                <select name="nbt-calculator-pax" id="nbt-calculator-pax" class="form-control" onchange="getPassengers(this)">
                    <option value="0">How many passengers?</option>
                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>                </select>
            </div>
            <div class="form-group">
                <select name="nbt-calculator-service-category-code" id="nbt-calculator-service-category-code" class="form-control">
                    <option value="MNA">VIP Meet &amp; Assist</option>
                </select>
            </div>
            <div class="form-group">
                <select name="nbt-calculator-core-service-code" id="nbt-calculator-core-service-code" class="form-control" onchange="getSevice(this)">
                    <option value="">Select service type</option>
                    <option value="ARR">Arrival</option>
                    <option value="DEP">Departure</option>
                    <option value="CN2F">Connection between any two flights, no buggies</option>
                </select>
            </div>
            <div class="nbt-calculator-display-result">
                <div class="form-group">
                    <p>Price of a daytime service for the number of passengers selected is</p>
                </div>
                <div class="form-group nbt-calculator-price-area">
                    <input name="nbt-calculator-price" id="nbt-calculator-price" readonly class="form-control">
                    <p>This price excludes any surcharge for an early morning or late night service.</p>
                    <p>Infants under 24 months are usually free and can be added when booked</p>
                </div>
            </div>


        </div>
        <div class="nbt-calculator-controls nbt-calculator-display-result">
            <button type="submit" class="nbt-button-lg" name="book-now" id="book-now">BOOK THIS SERVICE</button>
        </div>


    </div>
</div></div></div><div class="col-md-12"><div class="row"></div></div></form></div>
	</div>


</div>
<script type="text/javascript">
    function getPassengers (data) {
        var num = data.value;
        var code_service = document.getElementById('nbt-calculator-core-service-code').value;
        if (num == 0 || code_service == '') {
            var x = document.getElementsByClassName("nbt-calculator-display-result");
            x[0].style.display = 'none';
            x[1].style.display = 'none';
        } else {
            var x = document.getElementsByClassName("nbt-calculator-display-result");
            x[0].style.display = 'block';
            x[1].style.display = 'block';

            if (code_service == 'ARR' || code_service == 'DEP') {
                var price = num * 35;
                document.getElementById('nbt-calculator-price').value = 'USD ' + price.toFixed(2);
            }
            if (code_service == 'CN2F') {
                var price = num * 55;
                document.getElementById('nbt-calculator-price').value = 'USD ' + price.toFixed(2);
            }
        }
    }

    function getSevice (data) {
        var num = document.getElementById('nbt-calculator-pax').value;
        var code_service = data.value;
        if (num == 0 || code_service == '') {
            var x = document.getElementsByClassName("nbt-calculator-display-result");
            x[0].style.display = 'none';
            x[1].style.display = 'none';
        } else {
            var x = document.getElementsByClassName("nbt-calculator-display-result");
            x[0].style.display = 'block';
            x[1].style.display = 'block';

            if (code_service == 'ARR' || code_service == 'DEP') {
                var price = num * 35;
                document.getElementById('nbt-calculator-price').value = 'USD ' + price.toFixed(2);
            }
            if (code_service == 'CN2F') {
                var price = num * 55;
                document.getElementById('nbt-calculator-price').value = 'USD ' + price.toFixed(2);
            }
        }
    }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
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