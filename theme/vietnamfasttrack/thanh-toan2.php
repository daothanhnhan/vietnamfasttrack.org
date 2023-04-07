<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
<?php 
$action_email = new action_email();

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

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
                                                <a href="#tab_default_2" data-toggle="tab">Payment Online</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_default_2">
                                                <div class="gb-thanhtoan-tructuyen">  
                                                  
                                                    <!-- <!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="vi" xml:lang="vi">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demo tích hợp Nganluong.vn </title> -->
<?php 
    function visa1 () {
        global $conn_vn;
        $type = 'Normal';
        $price = $_SESSION['price_gbvn'];
        $country = $_SESSION['nationality'];
        $purpose = $_SESSION['purpose'];
        $month = $_SESSION['month'];
        $check_in = $_SESSION['check_in'];
        $check_out = $_SESSION['check_out'];
        $during = $_SESSION['during'];
        $arrival_port = $_SESSION['arrival_port'];
        $service = $_SESSION['service'];
        $airport_fasttrack = $_SESSION['airport_fasttrack'];
        
        $name = $_POST['buyer_fullname'];
        $gender = $_POST['gender'];
        $birthday = $_POST['day'] . '-'. $_POST['month'] . '-' . $_POST['year'];
        $passport_number = $_POST['passport_number'];
        $passport_expiry = $_POST['passport_expiry'];
        $email1 = $_POST['buyer_email'];
        $email2 = $_POST['email2'];
        $phone = $_POST['buyer_mobile'];
        $request = $_POST['request'];


        $sql = "INSERT INTO visa (type, country, purpose, month, check_in, check_out, during, arrival_port, service, price, name, gender, birthday, passport_number, passport_expiry, email1, email2, phone, request, airport_fasttrack) VALUES ('$type', '$country', $purpose, $month, '$check_in', '$check_out', $during, '$arrival_port', $service, $price, '$name', $gender, '$birthday', '$passport_number', '$passport_expiry', '$email1', '$email2', '$phone', '$request', $airport_fasttrack)";
        $result = mysqli_query($conn_vn, $sql) or die('error: ' . mysqli_error($conn_vn));
        // echo '<script type="text/javascript">alert(\'Bạn đã đăng ký thành công.\');</script>';
    }
?>

<!-- </head> -->
<?php   
if(@$_POST['nlpayment']) {
    visa1();
    ///////////////
$name = $_POST['buyer_fullname'];
$phone = $_POST['buyer_mobile'];
$email = $_POST['buyer_email'];
$price = $_SESSION['price_gbvn'];
// $product = $_POST['product'];
$noidung = "Hello $name,<br> 
We have received your request of online payment for the service of Vietnam Fast Track. Thank you for contacting us and using our service. Please kindly wait for our payment confirmation email. <br>
Should you have any queries, please feel free to contact us.<br>
We look forward to assisting you in your journey. <br>
Regards,<br>
Vietnam Fast Track  Team
";
$action_email->email_send($email, 'Confirmation of successful submission', $noidung);
// $price = $_POST['price'];

$product = $name.'-'.$phone.'-'.$email;
// $price = 1.00;

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
 }              
    
?>

<!-- <body>  -->
<style type="text/css">
    .list-content * {
        float: none;
    }
    .gb-chonphuongthucthanhtoan .boxContent p{
        font-size: 14px;
        line-height: 24px;
    }

    .gb-chonphuongthucthanhtoan h3{
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 30px;
    }
    .gb-chonphuongthucthanhtoan label{
        font-size: 14px;
        font-weight: 600;
        margin: 10px 0;
    }
    .gb-chonphuongthucthanhtoan .form-control{
        height: 45px;
        border-radius: 0;
    }
    .gb-chonphuongthucthanhtoan .btn{
        color: #fff;
        background-color: #fcae1d;
        border: 2px solid #fcae1d;
        border-radius: 0;
        box-shadow: none;
        padding: 13px 2px;
        min-width: 250px;
        transition:  all 0.5s;
        text-shadow: none;
    }
    .gb-chonphuongthucthanhtoan .btn:hover{
        color: #fcae1d;
        background: transparent;
    }

    .start {
        color: red;
    }
</style>
<div class="gb-chonphuongthucthanhtoan">
    <h3 style="float: none;">Select a payment method</h3>
    <form  name="NLpayBank" action="#" method="post" id="nganluong">
        <p><span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Note</span> You enter full information after </p>
        <div class="form-group">
            <label>Payment money:  </label>
            <input type="number" id="total_amount" name="total_amount" class="field-check  form-control" value="<?= $_SESSION['price_gbvn'] ?>" readonly>
        </div>
        <h1 style="font-size: 2em;">APPLICANT DETAILS</h1>
        <div class="form-group">
            <label>Nationality <span class="start">(as in Passport *)</span></label>
            <input type="text" id="nationality" name="nationality" class="field-check  form-control" value="<?= $_SESSION['nationality'] ?>" readonly>
        </div>        
        <div class="form-group">
            <label>Full name <span class="start">(as in Passport *)</span></label>
            <input type="text" id="buyer_fullname" name="buyer_fullname" class="field-check  form-control" value="" required>
        </div>
        <div class="form-group">
            <label>Gender <span class="start">(*)</span></label>
            <select id="gender" name="gender" class="field-check form-control" required>
                <option value="">Select...</option>
                <option value="1">Male</option>
                <option value="0">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label style="width: 100%;">Birth date <span class="start">(*)</span></label>
            <select id="month" name="month" class="field-check form-control" style="width: 30%;display: inline-block;" required>
                <option value="">Month</option>
                <?php for ($i=1;$i<=12;$i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
            <select id="day" name="day" class="field-check form-control" style="width: 30%;display: inline-block;" required>
                <option value="">Day</option>
                <?php for ($i=1;$i<=31;$i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
            <select id="year" name="year" class="field-check form-control" style="width: 38%;display: inline-block;" required>
                <option value="">Year</option>
                <?php 
                $day = (int)date('Y');
                for ($i=$day;$i>=1910;$i--) { 
                ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Passport number <span class="start">(*)</span></label>
            <input type="text"  id="passport_number" name="passport_number" class="field-check form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="">Passport expiry <span class="start">(*)</span></label>
            <input type="date"  id="passport_expiry" name="passport_expiry" class="field-check form-control" value="<?= date('Y-m-d') ?>" required>
        </div>
        <h1 style="font-size: 2em;">CONTACT INFORMATION</h1>
        <div class="form-group">
            <label>Primary email <span class="start">(*)</span></label>
            <input type="email" id="buyer_email" name="buyer_email" class="field-check  form-control" value="" required>
        </div>
        <div class="form-group">
            <label>Alternative email</label>
            <input type="email" id="email2" name="email2" class="field-check  form-control" value="">
        </div>
        <div class="form-group">
            <label for="">Phone number <span class="start">(*)</span></label>
            <input type="number"  id="buyer_mobile" name="buyer_mobile" class="field-check form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="">Special request</label>
            <textarea id="request" name="request" class="field-check form-control" rows="10" style="height: auto;"></textarea>
        </div>
        <hr>
        <div class="form-group">            
            <input type="checkbox" id="agree" name="agree" class="field-check form-control" value="1" style="height: auto;width: auto;display: inline;" required>
            <label for="">I Agree To The Terms & Conditions<span class="start">(*)</label>
        </div>
        <hr>

        <table style="clear:both;width:500px;padding-left:46px;">

            <tr><td></td>
                <td>
                    <input type="submit" name="nlpayment" value="Payment" class="btn"/>
                </td>
            </tr>
        </table>
    </form>
</div>
    <!-- <script src="https://www.nganluong.vn/webskins/javascripts/jquery_min.js" type="text/javascript"></script>      -->
    <script language="javascript">
        $('input[name="option_payment"]').bind('click', function() {
        $('.list-content li').removeClass('active');
        $(this).parent().parent('li').addClass('active');
        });     
    </script>   
<!-- </body>        
</html> -->         
            

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