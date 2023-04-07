<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
<?php 
$action_email = new action_email();
$name_email = $_SESSION['infor_paypal']['booking_name'];
$noidung = "Hello $name_email,<br> 
We have received your request of online payment for the service of Vietnam Fast Track. Thank you for contacting us and using our service. Please kindly wait for our payment confirmation email. <br>
Should you have any queries, please feel free to contact us.<br>
We look forward to assisting you in your journey. <br>
Regards,<br>
Vietnam Fast Track  Team
";
$action_email->email_send($_SESSION['infor_paypal']['booking_email'], 'Confirmation of successful submission', $noidung);
?>
<?php 
	foreach ($_SESSION['booking_visa_gbvn'] as $k => $v) {
        if ($k < 0) {
            unset($_SESSION['booking_visa_gbvn']);
        }
    }

	if (!isset($_SESSION['booking_visa_gbvn'])) {
        header('location: /book-now');
    }
    function RandomString()
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randstring = '';
	    for ($i = 0; $i < 10; $i++) {
	        $randstring .= $characters[rand(0, strlen($characters))];
	    }
	    return $randstring;
	}
	$randstring = RandomString();
	$randstring = $randstring . time();
	// echo $randstring.time();
    // echo '<pre>';
    // var_dump($_SESSION['booking_visa_gbvn']);
    // var_dump($_SESSION['infor_paypal']);

    function setCustomer ($str) {
    	global $conn_vn;
    	$name = $_SESSION['infor_paypal']['booking_name'];
    	$email = $_SESSION['infor_paypal']['booking_email'];
    	$phone = $_SESSION['infor_paypal']['booking_phone'];
    	$sql = "INSERT INTO customer (name, email, phone, code) VALUES ('$name', '$email', '$phone', '$str')";
    	$result = mysqli_query($conn_vn, $sql);
    }
    setCustomer($randstring);

    $total_cost = 0;
    function setBook ($str) {
    	global $conn_vn;
        global $total_cost;
    	$sql = "SELECT * FROM customer WHERE code = '$str'";//echo $sql;
    	$result = mysqli_query($conn_vn, $sql);
    	$row = mysqli_fetch_assoc($result);
    	$customer_id = $row['id'];
    	// $customer_id = 0;
    	// die($customer_id);
        $total_cost = 0;
    	foreach ($_SESSION['booking_visa_gbvn'] as $item) {
    		if ($item['type'] == 'arr') {
    			$time = $item['ARR_flight_time'];
    			$date = $item['ARR_flight_date'];
    			$number = $item['ARR_flight_number'];
    			$cabin = $item['ARR_cabin_class_code'];
    			$passengers = $item['ARR_total_passengers'];
    			$children = $item['ARR_total_infants'];
    			$message = $item['ARR_signboard_message'];
    			$name = $item['ARR_lead_passenger_name'];
    			$mobile = $item['ARR_lead_passenger_mobile'];
    			$infor = $item['ARR_add_info'];
    			$price = $item['ARR_subtotal'];

    			$city = $item['airport_code'];
    			$porter = $item['POR_selected'];
    			$visa = $item['VISA_selected'];
                $type = $item['type'];

                $cost = (float)$price + (float)($porter*10) + (float)($visa*10);

    			$sql = "INSERT INTO book (time_arr, date_arr, number_arr, cabin_arr, passengers, children, message, name, mobile, infor, price, city, porter, visa, customer_id, type) VALUES ('$time', '$date', '$number', '$cabin', '$passengers', '$children', '$message', '$name', '$mobile', '$infor', '$price', '$city', $porter, $visa, $customer_id, '$type')";
    			// echo $sql;
    			// $result = mysqli_query($conn_vn, $sql) or die('loi');

    		}

    		if ($item['type'] == 'dep') {
    			$time = $item['DEP_flight_time'];
    			$date = $item['DEP_flight_date'];
    			$number = $item['DEP_flight_number'];
    			$cabin = $item['DEP_cabin_class_code'];
    			$passengers = $item['DEP_total_passengers'];
    			$children = $item['DEP_total_infants'];
    			$message = $item['DEP_signboard_message'];
    			$name = $item['DEP_lead_passenger_name'];
    			$mobile = $item['DEP_lead_passenger_mobile'];
    			$infor = $item['DEP_add_info'];
    			$price = $item['DEP_subtotal'];

    			$city = $item['airport_code'];
    			$porter = $item['POR_selected'];
    			$visa = $item['VISA_selected'];
                $type = $item['type'];

                $cost = (float)$price + (float)($porter*10) + (float)($visa*10);

    			$sql = "INSERT INTO book (time_dep, date_dep, number_dep, cabin_dep, passengers, children, message, name, mobile, infor, price, city, porter, visa, customer_id, type) VALUES ('$time', '$date', '$number', '$cabin', '$passengers', '$children', '$message', '$name', '$mobile', '$infor', '$price', '$city', $porter, $visa, $customer_id, '$type')";
    			// echo $sql;
    			// $result = mysqli_query($conn_vn, $sql) or die('loi');
    		}

    		if ($item['type'] == 'cn2f') {
    			$time_arr = $item['CN2F_A_flight_time'];
    			$date_arr = $item['CN2F_A_flight_date'];
    			$number_arr = $item['CN2F_A_flight_number'];
    			$cabin_arr = $item['CN2F_A_cabin_class_code'];
    			$time_dep = $item['CN2F_D_flight_time'];
    			$date_dep = $item['CN2F_D_flight_date'];
    			$number_dep = $item['CN2F_D_flight_number'];
    			$cabin_dep = $item['CN2F_D_cabin_class_code'];
    			$passengers = $item['CN2F_total_passengers'];
    			$children = $item['CN2F_total_infants'];
    			$message = $item['CN2F_signboard_message'];
    			$name = $item['CN2F_lead_passenger_name'];
    			$mobile = $item['CN2F_lead_passenger_mobile'];
    			$infor = $item['CN2F_add_info'];
    			$price = $item['CN2F_subtotal'];

    			$city = $item['airport_code'];
    			$porter = $item['POR_selected'];
    			$visa = $item['VISA_selected'];
                $type = $item['type'];

                $cost = (float)$price + (float)($porter*10) + (float)($visa*10);

    			$sql = "INSERT INTO book (time_arr, date_arr, number_arr, cabin_arr, time_dep, date_dep, number_dep, cabin_dep, passengers, children, message, name, mobile, infor, price, city, porter, visa, customer_id, type) VALUES ('$time_arr', '$date_arr', '$number_arr', '$cabin_arr', '$time_dep', '$date_dep', '$number_dep', '$cabin_dep', '$passengers', '$children', '$message', '$name', '$mobile', '$infor', '$price', '$city', $porter, $visa, $customer_id, '$type')";
    			// echo $sql;
    			
    		}

            $total_cost += (float)$cost;
    		$result = mysqli_query($conn_vn, $sql) or die('loi ' . mysqli_error($conn_vn));
    	}
    }
    setBook($randstring);
    // setBook('UXkl5BiHNS1531710321')

?>
<?php 
// die;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

// require 'app/start.php';

if (!isset($_POST['product'], $_POST['price'])) {
	// die();
}

// $product = $_POST['product'];
// $price = $_POST['price'];

$product = $_SESSION['infor_paypal']['booking_name'].'-'.$_SESSION['infor_paypal']['booking_phone'].'-'.$_SESSION['infor_paypal']['booking_email'];
// $price = 1.00;
$price = (float)$total_cost + 27.96;
$shipping = 0.00;

$total = $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
	->setCurrency('USD')
	->setQuantity(1)
	->setPrice($price);

$itemList = new ItemList();
$itemList->setItems([$item]);

$details = new Details();
$details->setShipping($shipping)
	->setSubtotal($price);

$amount = new Amount();
$amount->setCurrency('USD')
	->setTotal($total)
	->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
	->setItemList($itemList)
	->setDescription('mo ta o day')
	->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL . 'pay.php?success=true')
	->setCancelUrl(SITE_URL . 'pay.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
	->setPayer($payer)
	->setRedirectUrls($redirectUrls)
	->setTransactions([$transaction]);

try {
	$payment->create($paypal);
} catch (Exception $e) {
	echo '<pre>';
	var_dump($e);
	die();
}

$approvalUrl = $payment->getApprovalLink();
echo $approvalUrl;

header("location: {$approvalUrl}");
?>