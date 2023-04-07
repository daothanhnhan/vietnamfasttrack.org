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
<style>
	
	ul.bankList {
		clear: both;
		height: 202px;
		width: 636px;
	}
	ul.bankList li {
		list-style-position: outside;
		list-style-type: none;
		cursor: pointer;
		float: left;
		margin-right: 0;
		padding: 5px 2px;
		text-align: center;
		width: 90px;
	}
	.list-content li {
		list-style: none outside none;
		margin: 0 0 10px;
	}
    .list-content li label input{
        margin-right: 10px;
    }
	
	.list-content li .boxContent {
		display: none;
		border:1px solid #cccccc;
		padding:10px; 
	}
	.list-content li.active .boxContent {
		display: block;
	}
	
	i.VISA, i.MASTE, i.AMREX, i.JCB, i.VCB, i.TCB, i.MB, i.VIB, i.ICB, i.EXB, i.ACB, i.HDB, i.MSB, i.NVB, i.DAB, i.SHB, i.OJB, i.SEA, i.TPB, i.PGB, i.BIDV, i.AGB, i.SCB, i.VPB, i.VAB, i.GPB, i.SGB,i.NAB,i.BAB 
	{ width:80px; height:30px; display:block; background:url(https://www.nganluong.vn/webskins/skins/nganluong/checkout/version3/images/bank_logo.png) no-repeat;}
	i.MASTE { background-position:0px -31px}
	i.AMREX { background-position:0px -62px}
	i.JCB { background-position:0px -93px;}
	i.VCB { background-position:0px -124px;}
	i.TCB { background-position:0px -155px;}
	i.MB { background-position:0px -186px;}
	i.VIB { background-position:0px -217px;}
	i.ICB { background-position:0px -248px;}
	i.EXB { background-position:0px -279px;}
	i.ACB { background-position:0px -310px;}
	i.HDB { background-position:0px -341px;}
	i.MSB { background-position:0px -372px;}
	i.NVB { background-position:0px -403px;}
	i.DAB { background-position:0px -434px;}
	i.SHB { background-position:0px -465px;}
	i.OJB { background-position:0px -496px;}
	i.SEA { background-position:0px -527px;}
	i.TPB { background-position:0px -558px;}
	i.PGB { background-position:0px -589px;}
	i.BIDV { background-position:0px -620px;}
	i.AGB { background-position:0px -651px;}
	i.SCB { background-position:0px -682px;}
	i.VPB { background-position:0px -713px;}
	i.VAB { background-position:0px -744px;}
	i.GPB { background-position:0px -775px;}
	i.SGB { background-position:0px -806px;}
	i.NAB { background-position:0px -837px;}
	i.BAB { background-position:0px -868px;}
	
	ul.cardList li {
		cursor: pointer;
		float: left;
		margin-right: 0;
		padding: 5px 4px;
		text-align: center;
	}
</style>
<!-- </head> -->
<?php	
if(@$_POST['nlpayment']) {
	visa1();
	// include('config.php');	
	// include('include/NL_Checkoutv3.php');	
	$nlcheckout= new NL_CheckOutV3(MERCHANT_ID,MERCHANT_PASS,RECEIVER,URL_API);
	$count_sp = count($_POST['name']);
	$total_amount = 0;
	$array_items=array();
	for ($i=0; $i < 1; $i++) { 
		// $total_amount += $_POST['price'][$i] * $_POST['quantity'][$i];
		$j = $i + 1;
		$array_items[] = array(
				'item_name'.$j => 'visa',
				'item_quantity'.$j => 1,
				'item_amount'.$j => (int)$_POST['total_amount'],
				'item_url'.$j => 'http://' . $_SERVER['SERVER_NAME']. '/visa'
			);
	}
	// for ($i=0; $i < $count_sp; $i++) { 
	// 	$total_amount += $_POST['price'][$i] * $_POST['quantity'][$i];
	// 	$j = $i + 1;
	// 	$array_items[] = array(
	// 			'item_name'.$j => $_POST['name'][$i],
	// 			'item_quantity'.$j => (int)$_POST['quantity'][$i],
	// 			'item_amount'.$j => (int)$_POST['price'][$i],
	// 			'item_url'.$j => $_POST['link'][$i]
	// 		);
	// }
	// echo '<pre>';
	// var_dump($array_items);die;
	// $total_amount=$_POST['total_amount'];
	 	
	 // $array_items[0]= array('item_name1' => 'Product name1',
		// 			 'item_quantity1' => 1,
		// 			 'item_amount1' => $total_amount,
		// 			 'item_url1' => 'http://nganluong.vn/1');
	 // $array_items[1]= array('item_name2' => 'Product name2',
		// 			 'item_quantity2' => 1,
		// 			 'item_amount2' => $total_amount,
		// 			 'item_url2' => 'http://nganluong.vn/2');
					 
	// $array_items=array();				
	// $total_amount= 3000; 
	$total_amount= $_POST['total_amount'];
	 $payment_method =$_POST['option_payment'];
	 $bank_code = @$_POST['bankcode'];
	 $order_code ="macode_".time();
	
	 $payment_type ='';
	 $discount_amount =0;
	 $order_description='';
	 $tax_amount=0;
	 $fee_shipping=0;
	 $return_url ='http://localhost/nganluong.vn/checkoutv3/payment_success.php';
	 $cancel_url =urlencode('http://localhost/nganluong.vn/checkoutv3?orderid='.$order_code) ;
	
	 $buyer_fullname =$_POST['buyer_fullname'];
	 $buyer_email =$_POST['buyer_email'];
	 $buyer_mobile =$_POST['buyer_mobile'];
	 
	 $buyer_address ='';
	 
	 // die('tuan');
	 
	
	if($payment_method !='' && $buyer_email !="" && $buyer_mobile !="" && $buyer_fullname !="" && filter_var( $buyer_email, FILTER_VALIDATE_EMAIL )  ){
		if($payment_method =="VISA"){
		
			$nl_result= $nlcheckout->VisaCheckout($order_code,$total_amount,$payment_type,$order_description,$tax_amount,
											  $fee_shipping,$discount_amount,$return_url,$cancel_url,$buyer_fullname,$buyer_email,$buyer_mobile, 
									          $buyer_address,$array_items,$bank_code);
											  
		}elseif($payment_method =="NL"){
			$nl_result= $nlcheckout->NLCheckout($order_code,$total_amount,$payment_type,$order_description,$tax_amount,
												$fee_shipping,$discount_amount,$return_url,$cancel_url,$buyer_fullname,$buyer_email,$buyer_mobile, 
												$buyer_address,$array_items);
												
		}elseif($payment_method =="ATM_ONLINE" && $bank_code !='' ){
			$nl_result= $nlcheckout->BankCheckout($order_code,$total_amount,$bank_code,$payment_type,$order_description,$tax_amount,
												  $fee_shipping,$discount_amount,$return_url,$cancel_url,$buyer_fullname,$buyer_email,$buyer_mobile, 
												  $buyer_address,$array_items) ;
		}
		elseif($payment_method =="NH_OFFLINE"){
				$nl_result= $nlcheckout->officeBankCheckout($order_code, $total_amount, $bank_code, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items);
			}
		elseif($payment_method =="ATM_OFFLINE"){
				$nl_result= $nlcheckout->BankOfflineCheckout($order_code, $total_amount, $bank_code, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items);
				
			}
		elseif($payment_method =="IB_ONLINE"){
				$nl_result= $nlcheckout->IBCheckout($order_code, $total_amount, $bank_code, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items);
			}
		elseif ($payment_method == "CREDIT_CARD_PREPAID") {

			$nl_result = $nlcheckout->PrepaidVisaCheckout($order_code, $total_amount, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items, $bank_code);
		}
		// var_dump($nl_result); die;
		if ($nl_result->error_code =='00'){
		
		//Cập nhât order với token  $nl_result->token để sử dụng check hoàn thành sau này
		?>
		<script type="text/javascript">
		<!--
		window.location = "<?php echo(string)$nl_result->checkout_url; // .'&lang=en' chuyển mặc định tiếng anh  ?>"
		//-->
		</script>
		<?PHP
		}else{
			echo $nl_result->error_message;
		}
			
	}else{
		echo "<h3> Bạn chưa nhập đủ thông tin khách hàng </h3>";
	}
 }				
	
?>

<!-- <body>	 -->
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
    <h3 style="float: none;">Chọn phương thức thanh toán</h3>
    <form  name="NLpayBank" action="#" method="post" id="nganluong">
        <p><span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span> Bạn nhập đầy đủ thông tin sau </p>
        <div class="form-group">
            <label>Số tiền thanh toán:	</label>
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
            	for ($i=$day;$i>=1971;$i--) { 
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
        <ul class="list-content">
            <li class="active">
                <label><input type="radio" value="NL" name="option_payment" selected="true">Thanh toán bằng Ví điện tử NgânLượng</label>
                <div class="boxContent">
                    <p>
                        Thanh toán trực tuyến AN TOÀN và ĐƯỢC BẢO VỆ, sử dụng thẻ ngân hàng trong và ngoài nước hoặc nhiều hình thức tiện lợi khác.
                        Được bảo hộ & cấp phép bởi NGÂN HÀNG NHÀ NƯỚC, ví điện tử duy nhất được cộng đồng ƯA THÍCH NHẤT 2 năm liên tiếp, Bộ Thông tin Truyền thông trao giải thưởng Sao Khuê
                        <br/>Giao dịch. Đăng ký ví NgânLượng.vn miễn phí <a href="https://www.nganluong.vn/?portal=nganluong&amp;page=user_register" target="_blank">tại đây</a></p>
                </div>
            </li>
            <li>
                <label><input type="radio" value="ATM_ONLINE" name="option_payment">Thanh toán online bằng thẻ ngân hàng nội địa</label>
                <div class="boxContent">
                    <p><i>
                            <span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span>: Bạn cần đăng ký Internet-Banking hoặc dịch vụ thanh toán trực tuyến tại ngân hàng trước khi thực hiện.</i></p>

                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
                                <input type="radio" value="BIDV"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
                                <input type="radio" value="VCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="DAB" title="Ngân hàng Đông Á"></i>
                                <input type="radio" value="DAB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="tcb_ck_on">
                                <i class="TCB" title="Ngân hàng Kỹ Thương"></i>
                                <input type="radio" value="TCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_mb_ck_on">
                                <i class="MB" title="Ngân hàng Quân Đội"></i>
                                <input type="radio" value="MB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vib_ck_on">
                                <i class="VIB" title="Ngân hàng Quốc tế"></i>
                                <input type="radio" value="VIB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vtb_ck_on">
                                <i class="ICB" title="Ngân hàng Công Thương Việt Nam"></i>
                                <input type="radio" value="ICB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_exb_ck_on">
                                <i class="EXB" title="Ngân hàng Xuất Nhập Khẩu"></i>
                                <input type="radio" value="EXB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_acb_ck_on">
                                <i class="ACB" title="Ngân hàng Á Châu"></i>
                                <input type="radio" value="ACB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_hdb_ck_on">
                                <i class="HDB" title="Ngân hàng Phát triển Nhà TPHCM"></i>
                                <input type="radio" value="HDB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_msb_ck_on">
                                <i class="MSB" title="Ngân hàng Hàng Hải"></i>
                                <input type="radio" value="MSB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_nvb_ck_on">
                                <i class="NVB" title="Ngân hàng Nam Việt"></i>
                                <input type="radio" value="NVB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vab_ck_on">
                                <i class="VAB" title="Ngân hàng Việt Á"></i>
                                <input type="radio" value="VAB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vpb_ck_on">
                                <i class="VPB" title="Ngân Hàng Việt Nam Thịnh Vượng"></i>
                                <input type="radio" value="VPB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_scb_ck_on">
                                <i class="SCB" title="Ngân hàng Sài Gòn Thương tín"></i>
                                <input type="radio" value="SCB"  name="bankcode" >
                            </label></li>



                        <li class="bank-online-methods ">
                            <label for="bnt_atm_pgb_ck_on">
                                <i class="PGB" title="Ngân hàng Xăng dầu Petrolimex"></i>
                                <input type="radio" value="PGB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="bnt_atm_gpb_ck_on">
                                <i class="GPB" title="Ngân hàng TMCP Dầu khí Toàn Cầu"></i>
                                <input type="radio" value="GPB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="bnt_atm_agb_ck_on">
                                <i class="AGB" title="Ngân hàng Nông nghiệp &amp; Phát triển nông thôn"></i>
                                <input type="radio" value="AGB"  name="bankcode" >
                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="bnt_atm_sgb_ck_on">
                                <i class="SGB" title="Ngân hàng Sài Gòn Công Thương"></i>
                                <input type="radio" value="SGB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="BAB" title="Ngân hàng Bắc Á"></i>
                                <input type="radio" value="BAB"  name="bankcode" >
                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="TPB" title="Tền phong bank"></i>
                                <input type="radio" value="TPB"  name="bankcode" >
                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="NAB" title="Ngân hàng Nam Á"></i>
                                <input type="radio" value="NAB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="SHB" title="Ngân hàng TMCP Sài Gòn - Hà Nội (SHB)"></i>
                                <input type="radio" value="SHB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="OJB" title="Ngân hàng TMCP Đại Dương (OceanBank)"></i>
                                <input type="radio" value="OJB"  name="bankcode" >
                            </label></li>





                    </ul>

                </div>
            </li>
            <li>
                <label><input type="radio" value="IB_ONLINE" name="option_payment">Thanh toán bằng IB</label>
                <div class="boxContent">
                    <p><i>
                            <span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span>: Bạn cần đăng ký Internet-Banking hoặc dịch vụ thanh toán trực tuyến tại ngân hàng trước khi thực hiện.</i></p>

                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
                                <input type="radio" value="BIDV"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
                                <input type="radio" value="VCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="DAB" title="Ngân hàng Đông Á"></i>
                                <input type="radio" value="DAB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="tcb_ck_on">
                                <i class="TCB" title="Ngân hàng Kỹ Thương"></i>
                                <input type="radio" value="TCB"  name="bankcode" >

                            </label></li>


                    </ul>

                </div>
            </li>
            <li>
                <label><input type="radio" value="ATM_OFFLINE" name="option_payment">Thanh toán atm offline</label>
                <div class="boxContent">

                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
                                <input type="radio" value="BIDV"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
                                <input type="radio" value="VCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="DAB" title="Ngân hàng Đông Á"></i>
                                <input type="radio" value="DAB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="tcb_ck_on">
                                <i class="TCB" title="Ngân hàng Kỹ Thương"></i>
                                <input type="radio" value="TCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_mb_ck_on">
                                <i class="MB" title="Ngân hàng Quân Đội"></i>
                                <input type="radio" value="MB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vtb_ck_on">
                                <i class="ICB" title="Ngân hàng Công Thương Việt Nam"></i>
                                <input type="radio" value="ICB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_acb_ck_on">
                                <i class="ACB" title="Ngân hàng Á Châu"></i>
                                <input type="radio" value="ACB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_msb_ck_on">
                                <i class="MSB" title="Ngân hàng Hàng Hải"></i>
                                <input type="radio" value="MSB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_scb_ck_on">
                                <i class="SCB" title="Ngân hàng Sài Gòn Thương tín"></i>
                                <input type="radio" value="SCB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="bnt_atm_pgb_ck_on">
                                <i class="PGB" title="Ngân hàng Xăng dầu Petrolimex"></i>
                                <input type="radio" value="PGB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="bnt_atm_agb_ck_on">
                                <i class="AGB" title="Ngân hàng Nông nghiệp &amp; Phát triển nông thôn"></i>
                                <input type="radio" value="AGB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="SHB" title="Ngân hàng TMCP Sài Gòn - Hà Nội (SHB)"></i>
                                <input type="radio" value="SHB"  name="bankcode" >

                            </label></li>




                    </ul>

                </div>
            </li>
            <li>
                <label><input type="radio" value="NH_OFFLINE" name="option_payment">Thanh toán tại văn phòng ngân hàng</label>
                <div class="boxContent">

                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
                                <input type="radio" value="BIDV"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
                                <input type="radio" value="VCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="DAB" title="Ngân hàng Đông Á"></i>
                                <input type="radio" value="DAB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="tcb_ck_on">
                                <i class="TCB" title="Ngân hàng Kỹ Thương"></i>
                                <input type="radio" value="TCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_mb_ck_on">
                                <i class="MB" title="Ngân hàng Quân Đội"></i>
                                <input type="radio" value="MB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vib_ck_on">
                                <i class="VIB" title="Ngân hàng Quốc tế"></i>
                                <input type="radio" value="VIB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vtb_ck_on">
                                <i class="ICB" title="Ngân hàng Công Thương Việt Nam"></i>
                                <input type="radio" value="ICB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_acb_ck_on">
                                <i class="ACB" title="Ngân hàng Á Châu"></i>
                                <input type="radio" value="ACB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_msb_ck_on">
                                <i class="MSB" title="Ngân hàng Hàng Hải"></i>
                                <input type="radio" value="MSB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_scb_ck_on">
                                <i class="SCB" title="Ngân hàng Sài Gòn Thương tín"></i>
                                <input type="radio" value="SCB"  name="bankcode" >

                            </label></li>



                        <li class="bank-online-methods ">
                            <label for="bnt_atm_pgb_ck_on">
                                <i class="PGB" title="Ngân hàng Xăng dầu Petrolimex"></i>
                                <input type="radio" value="PGB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="bnt_atm_agb_ck_on">
                                <i class="AGB" title="Ngân hàng Nông nghiệp &amp; Phát triển nông thôn"></i>
                                <input type="radio" value="AGB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="TPB" title="Tền phong bank"></i>
                                <input type="radio" value="TPB"  name="bankcode" >

                            </label></li>



                    </ul>

                </div>
            </li>
            <li>
                <label>
                    <input type="radio" value="VISA" name="option_payment" selected="true">Thanh toán bằng thẻ Visa hoặc MasterCard</label>
                <div class="boxContent">
                    <p><span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span>:Visa hoặc MasterCard.</p>
                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VISA" title="Ngân hàng Kỹ Thương"></i>
                                <input type="radio" value="VISA"  name="bankcode" >
                            </label>
                        </li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="MASTE" title="Ngân hàng Kỹ Thương"></i>
                                <input type="radio" value="MASTER"  name="bankcode" >
                            </label></li>
                    </ul>
                </div>
            </li>
            <li>
                <label><input type="radio" value="CREDIT_CARD_PREPAID" name="option_payment" selected="true">Thanh toán bằng thẻ Visa hoặc MasterCard trả trước</label>

            </li>
        </ul>

        <table style="clear:both;width:500px;padding-left:46px;">

            <tr><td></td>
                <td>
                    <input type="submit" name="nlpayment" value="Thanh Toán" class="btn"/>
                </td>
            </tr>
        </table>
    </form>
</div>
	<!-- <script src="https://www.nganluong.vn/webskins/javascripts/jquery_min.js" type="text/javascript"></script>		 -->
	<script language="javascript">
		$('input[name="option_payment"]').bind('click', function() {
		$('.list-content li').removeClass('active');
		$(this).parent().parent('li').addClass('active');
		});		
	</script> 	
<!-- </body>		
</html> -->			
			