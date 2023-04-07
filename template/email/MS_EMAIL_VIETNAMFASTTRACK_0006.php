<?php 
    function visa () {
        global $conn_vn;
        if (isset($_POST['send_visa'])) {
            // var_dump($_POST);die;
            $type = $_POST['type'];
            $country = $_POST['country'];
            $purpose = $_POST['purpose'];
            $month = $_POST['month'];
            $check_in = $_POST['date1'];
            $check_out = $_POST['date2'];
            $during = $_POST['during'];
            $arrival_port = $_POST['arrival_port'];
            $service = (isset($_POST['extra'])) ? $_POST['extra'] : 0;
            $airport_fasttrack = (isset($_POST['extra1'])) ? $_POST['extra1'] : 0;
            $price = $_POST['price'];
            $_SESSION['price_gbvn'] = $price;
            $_SESSION['nationality'] = $country;
            $_SESSION['purpose'] = $purpose;
            $_SESSION['month'] = $month;
            $_SESSION['check_in'] = $check_in;
            $_SESSION['check_out'] = $check_out;
            $_SESSION['during'] = $during;
            $_SESSION['arrival_port'] = $arrival_port;
            $_SESSION['service'] = $service;
            $_SESSION['airport_fasttrack'] = $airport_fasttrack;

            // $sql = "INSERT INTO visa (type, country, purpose, check_in, check_out, during, arrival_port, service) VALUES ('$type', '$country', $purpose, '$check_in', '$check_out', $during, '$arrival_port', $service)";
            // $result = mysqli_query($conn_vn, $sql);
            // echo '<script type="text/javascript">alert(\'Bạn đã đăng ký thành công.\');</script>';
            echo '<script type="text/javascript">window.location.href="/thanh-toan";</script>';
        }
    }
    visa();
?>

<form action="" method="post" id="visa">
<div class="gb-getvisa-page-form">
    <div class="form">
        <div class="form-group">
            <ul class="normal-rush">
                <li class="active" onclick="normal()">Normal</li>
                <li onclick="rush()">Rush</li>
            </ul>
            <div style="display: none;">
                <input type="radio" name="type" value="normal" id="loai_normal" checked>
                <input type="radio" name="type" value="rush" id="loai_rush">
            </div>            
        </div>
        <div class="form-group">
            <div>
                <select id="country" name ="country" required></select>
            </div>
            <script src = "/plugin/country/countries.js"></script>
            <script language="javascript">
                populateCountries("country", "state");
                populateCountries("country2");
                populateCountries("country2");
            </script>
        </div>
        <div class="form-group">
            <select name="purpose" id="purpose" class="form-control" onchange="purpose_set(this)">
                <!-- <option value="0">Select purpose</option> -->
                <option value="1" data-us="0" data-time="2" selected="" rel="0" data-id="1">Tourist Visa</option>
                <option value="2" data-us="0" data-time="3" rel="0" data-id="2">Business Visa</option>
            </select>
        </div>
        <div class="form-group" id="set_month">
            <select name="month" id="month" class="form-control" onchange="month_set(this)">
                <option value="1" data-us="0" data-time="2" selected="" rel="0" data-id="1">1 month single entry</option>
                <option value="2" data-us="0" data-time="2" rel="0" data-id="1">1 month multiple entry</option>
                <option value="3" data-us="0" data-time="3" rel="0" data-id="2">3 months single entry</option>
                <option value="4" data-us="0" data-time="3" rel="0" data-id="2">3 months multiple entry</option>
            </select>
        </div>
        <div class="form-group">
            <div class="input-group date date-check-in" data-date="12-February-2017" data-date-format="mmmm-dd-yyyy">
                <input name="date1" class="form-control" type="text" value="12-February-2017">
                <span class="input-group-addon btn"><span class="ti-calendar" id="ti-calendar1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group date date-check-out" data-date="12-February-2017" data-date-format="mmmm-dd-yyyy">
                <input name="date2" class="form-control" type="text" value="12-February-2017">
                <span class="input-group-addon btn"><span class="ti-calendar" id="ti-calendar2"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span></span>
            </div>
        </div>
        <div class="form-group">
            <ul>
                <li>
                    <input type="radio" name="during" value="1" id="du1" onclick="ckdur1()" checked />
                    <label for="blue" class="blue"></label>
                    <?php if ($lang == 'vn') { ?>
                    <span>1-2 Working days [Business hours Monday to Friday]</span>
                    <?php } else { ?>
                    <span>1-2个工作天[星期一至五办公时间]</span>
                    <?php } ?>
                </li>
                <li>
                    <input type="radio" name="during" value="2" id="du2" onclick="ckdur2()" />
                    <label for="blue" class="blue"></label>
                    <?php if ($lang == 'vn') { ?>
                    <span>4-8 Working hours (Rush)</span>
                    <?php } else { ?>
                    <span>4-8小时(高峰)</span>
                    <?php } ?>
                </li>
                <li>
                    <input type="radio" name="during" value="3" id="du3" onclick="ckdur3()" />
                    <label for="blue" class="blue"></label>
                    <?php if ($lang == 'vn') { ?>
                    <span>1-2 Hours (Emergency)</span>
                    <?php } else { ?>
                    <span>1 - 2小时(紧急)</span>
                    <?php } ?>
                </li>
                <li>
                    <input type="radio" name="during" value="4" id="du4" onclick="ckdur4()" />
                    <label for="blue" class="blue"></label>
                    <?php if ($lang == 'vn') { ?>
                    <span>10-15 minutes(super urgent service)</span>
                    <?php } else { ?>
                    <span>10-15分钟(超急服务)</span>
                    <?php } ?>
                </li>
            </ul>
            <input type="hidden" name="time" id="time">
        </div>
        <div class="form-group">
            <select class="form-control" id="arrival_port" name="arrival_port" required="">
                <option value="Noi Bai (Hanoi city)" rel="0">Noi Bai (Hanoi city)</option>
                <option value="Tan Son Nhat (Ho Chi Minh city)" rel="0">Tan Son Nhat (Ho Chi Minh city)</option>
                <option value="Da Nang (Danang city)" rel="0">Da Nang (Danang city)</option>
                <option value="Cam Ranh( NhaTrang )" rel="0">Cam Ranh( NhaTrang )</option>
                <option value="Hai Phong (HPH)" rel="0">Hai Phong (HPH)</option>
                <option value="Phu Quoc Island (PQC)" rel="0">Phu Quoc Island (PQC)</option>
            </select>
            <div class="icon_flight"></div>
        </div>
        <div class="form-group">
            <label> Extra services </label>
            <ul>
            	<!-- <li>
                    <input type="radio" name="extra" value="0" id="ex0" onclick="extra1(this)" />
                    <label for="blue" class="blue"></label>
                    <span>None</span>
                </li> -->
                <li>
                    <input type="radio" name="extra" value="1" id="ex1" onclick="extra2(this)" />
                    <label for="blue" class="blue"></label>
                    <?php if ($lang == 'vn') { ?>
                    <span>Private/confidential Letter (show me in private letter)</span>
                    <?php } else { ?>
                    <span>私人/机密信件(以私人信件形式向我展示)</span>
                    <?php } ?>
                </li>
                <li>
                    <input type="radio" name="extra1" value="2" id="ex2" onclick="extra3(this)" />
                    <label for="blue" class="blue"></label>
                    <?php if ($lang == 'vn') { ?>
                    <span> Airport Fasttrack - Normal</span>
                    <?php } else { ?>
                    <span>机场快速通道-正常</span>
                    <?php } ?>
                </li>
                <li>
                    <input type="radio" name="extra1" value="3" id="ex3" onclick="extra4(this)" />
                    <label for="blue" class="blue"></label>
                    <?php if ($lang == 'vn') { ?>
                    <span> Airport Fasttrack - VIP</span>
                    <?php } else { ?>
                    <span>机场快速通道- VIP</span>
                    <?php } ?>
                </li>
                <input type="hidden" name="level" id="level">
                <input type="hidden" name="airport_fasttrack" id="airport_fasttrack">
            </ul>
        </div>
        <div class="form-group clearfix">
            <input type="hidden" name="price" id="price">
            <div class="text-center total_fees"><?= ($lang=='vn') ? 'Totla' : '总' ?>: <span id="report">0</span> USD</div>
        </div>
        <button class="btn btn-warning btn-block btn-lg" type="submit" name="send_visa"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> <?= ($lang=='vn') ? 'Apply now' : '登录' ?></button>
    </div>
</div>
</form>
<script type="text/javascript">
    // function nation () {
    //     alert('nation');
    // }

    function normal () {
        document.getElementById('loai_normal').checked = true; 
    }

    function rush () {
        document.getElementById('loai_rush').checked = true; 
    }

    function purpose_set (data) {
    	var time = document.getElementById('time').value;
		time = Number(time);
		var level = document.getElementById('level').value;
		level = Number(level);
        var airport_fasttrack = document.getElementById('airport_fasttrack').value;
        airport_fasttrack = Number(airport_fasttrack);
    	// alert(data.value);
    	var val = data.value;
    	if (val == 1) {
    		document.getElementById('set_month').innerHTML = '<select name="purpose" id="month" class="form-control" onchange="month_set(this)"><option value="1" data-us="0" data-time="2" selected="" rel="0" data-id="1">1 month single entry</option><option value="2" data-us="0" data-time="2" rel="0" data-id="1">1 month multiple entry</option><option value="3" data-us="0" data-time="3" rel="0" data-id="2">3 months single entry</option><option value="4" data-us="0" data-time="3" rel="0" data-id="2">3 months multiple entry</option></select>';
    	}
    	if (val == 2) {
    		document.getElementById('set_month').innerHTML = '<select name="purpose" id="month" class="form-control" onchange="month_set(this)"><option value="1" data-us="0" data-time="2" selected="" rel="0" data-id="1">1 month single entry</option><option value="2" data-us="0" data-time="2" rel="0" data-id="1">1 month multiple entry</option><option value="3" data-us="0" data-time="3" rel="0" data-id="2">3 months single entry</option><option value="4" data-us="0" data-time="3" rel="0" data-id="2">3 months multiple entry</option><option value="5" data-us="0" data-time="3" rel="0" data-id="2">6 months multiple entry</option><option value="6" data-us="0" data-time="3" rel="0" data-id="2">1 year multiple entry</option></select>';
    	}

		var country = document.getElementById('country').value;
		var add = 0;
		if (val == 1) {
			if (country == 'China' || country == 'India' || country == 'South Africa') {
				add = 10;
			}
			if (country == 'Afghanistan' || country == 'Algeria' || country == 'Bangladesh' || country == 'Jordan' || country == 'Kuwait' || country == 'Lebanon' || country == 'Mozambique' || country == 'Moroto' || country == 'Namibia' || country == 'Iran' || country == 'Iraq' || country == 'Qatar' || country == 'Saudi Arabia' || country == 'UAE' || country == 'Sudan' || country == 'Syria' || country == 'Srilanka' || country == 'Tanzania' || country == 'Uganda' || country == 'Zambia') {
				add = 170;
			}
			if (country == 'Nigeria') {
				add = 700;
			}
			if (country == 'Libya') {
				add = 300;
			}
		}
		if (val == 2) {
			if (country == 'China' || country == 'India' || country == 'South Africa') {
				add = 30;
			}
			if (country == 'Afghanistan' || country == 'Algeria' || country == 'Bangladesh' || country == 'Jordan' || country == 'Kuwait' || country == 'Lebanon' || country == 'Mozambique' || country == 'Moroto' || country == 'Namibia' || country == 'Iran' || country == 'Iraq' || country == 'Qatar' || country == 'Saudi Arabia' || country == 'UAE' || country == 'Sudan' || country == 'Syria' || country == 'Srilanka' || country == 'Tanzania' || country == 'Uganda' || country == 'Zambia') {
				add = 170;
			}
			if (country == 'Nigeria') {
				add = 700;
			}
			if (country == 'Libya') {
				add = 300;
			}
		}
		//////
		if (val == 1) {
			if (time == 200) {
				// alert(time);
				document.getElementById('report').innerHTML = 220 + add + level + airport_fasttrack;
				document.getElementById('price').value = 220 + add + level + airport_fasttrack;
			} else {
				document.getElementById('report').innerHTML = 10 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 10 + add + time + level + airport_fasttrack;
			}
		}
		if (val == 2) {
			document.getElementById('report').innerHTML = 80 + add + time + level + airport_fasttrack;
			document.getElementById('price').value = 80 + add + time + level + airport_fasttrack;
		}

		if (country == '') {
			document.getElementById('report').innerHTML = 0;
			document.getElementById('price').value = 0;
		}
    }

    function month_set(data) {
    	var month = data.value;
		var purpose = document.getElementById('purpose').value;
		var country = document.getElementById('country').value;
		var time = document.getElementById('time').value;
		time = Number(time);
		var level = document.getElementById('level').value;
		level = Number(level);
        var airport_fasttrack = document.getElementById('airport_fasttrack').value;
        airport_fasttrack = Number(airport_fasttrack);
		var add = 0;
		if (purpose == 1) {
			if (country == 'China' || country == 'India' || country == 'South Africa') {
				add = 10;
			}
			if (country == 'Afghanistan' || country == 'Algeria' || country == 'Bangladesh' || country == 'Jordan' || country == 'Kuwait' || country == 'Lebanon' || country == 'Mozambique' || country == 'Moroto' || country == 'Namibia' || country == 'Iran' || country == 'Iraq' || country == 'Qatar' || country == 'Saudi Arabia' || country == 'UAE' || country == 'Sudan' || country == 'Syria' || country == 'Srilanka' || country == 'Tanzania' || country == 'Uganda' || country == 'Zambia') {
				add = 170;
			}
			if (country == 'Nigeria') {
				add = 700;
			}
			if (country == 'Libya') {
				add = 300;
			}
		}
		if (purpose == 2) {
			if (country == 'China' || country == 'India' || country == 'South Africa') {
				add = 30;
			}
			if (country == 'Afghanistan' || country == 'Algeria' || country == 'Bangladesh' || country == 'Jordan' || country == 'Kuwait' || country == 'Lebanon' || country == 'Mozambique' || country == 'Moroto' || country == 'Namibia' || country == 'Iran' || country == 'Iraq' || country == 'Qatar' || country == 'Saudi Arabia' || country == 'UAE' || country == 'Sudan' || country == 'Syria' || country == 'Srilanka' || country == 'Tanzania' || country == 'Uganda' || country == 'Zambia') {
				add = 170;
			}
			if (country == 'Nigeria') {
				add = 700;
			}
			if (country == 'Libya') {
				add = 300;
			}
		}
		//////
		if (purpose == 1) {
			if (time == 200) {
				if (month == 1) {
					document.getElementById('report').innerHTML = 220 + add + level + airport_fasttrack;
					document.getElementById('price').value = 220 + add + level + airport_fasttrack;
				}
				if (month == 2) {
					document.getElementById('report').innerHTML = 245 + add + level + airport_fasttrack;
					document.getElementById('price').value = 245 + add + level + airport_fasttrack;
				}
				if (month == 3) {
					document.getElementById('report').innerHTML = 255 + add + level + airport_fasttrack;
					document.getElementById('price').value = 255 + add + level + airport_fasttrack;
				}
				if (month == 4) {
					document.getElementById('report').innerHTML = 275 + add + level + airport_fasttrack;
					document.getElementById('price').value = 275 + add + level + airport_fasttrack;
				}
			} else {
				if (month == 1) {
					document.getElementById('report').innerHTML = 10 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 10 + add + time + level + airport_fasttrack;
				}
				if (month == 2) {
					document.getElementById('report').innerHTML = 12 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 12 + add + time + level + airport_fasttrack;
				}
				if (month == 3) {
					document.getElementById('report').innerHTML = 20 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 20 + add + time + level + airport_fasttrack;
				}
				if (month == 4) {
					document.getElementById('report').innerHTML = 30 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 30 + add + time + level + airport_fasttrack;
				}
			}
			
		}
		if (purpose == 2) {
			if (month == 1) {
				document.getElementById('report').innerHTML = 80 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 80 + add + time + level + airport_fasttrack;
			}
			if (month == 2) {
				document.getElementById('report').innerHTML = 85 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 85 + add + time + level + airport_fasttrack;
			}
			if (month == 3) {
				document.getElementById('report').innerHTML = 115 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 115 + add + time + level + airport_fasttrack;
			}
			if (month == 4) {
				document.getElementById('report').innerHTML = 125 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 125 + add + time + level + airport_fasttrack;
			}
			if (month == 5) {
				document.getElementById('report').innerHTML = 320 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 320 + add + time + level + airport_fasttrack;
			}
			if (month == 6) {
				document.getElementById('report').innerHTML = 430 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 430 + add + time + level + airport_fasttrack;
			}
		}

		if (country == '') {
			document.getElementById('report').innerHTML = 0;
			document.getElementById('price').value = 0;
		}
    }

    function ckdur1 () {
    	// alert('1');
    	document.getElementById('time').value = 0;
    	get_check();
    }

    function ckdur2 () {
    	// alert('2');
    	document.getElementById('time').value = 20;
    	get_check();
    }

    function ckdur3 () {
    	// alert('3');
    	document.getElementById('time').value = 80;
    	get_check();
    }

    function ckdur4 () {
    	// alert('3');
    	document.getElementById('time').value = 200;
    	get_check();
    }

    var uncheck;
    function extra1 (data) {
    	if (uncheck != data) {
    		uncheck = data;
    		document.getElementById('level').value = 0;
    	} else {
    		data.checked = false;
    		uncheck = null;
    		document.getElementById('level').value = 0;
    	}
    	
    	get_check();
    }

    function extra2 (data) {
    	if (uncheck != data) {
    		uncheck = data;
    		document.getElementById('level').value = 10;
    	} else {
    		data.checked = false;
    		uncheck = null;
    		document.getElementById('level').value = 0;
    	}
    	
    	get_check();
    }

    var uncheck1;
    function extra3 (data) {
    	if (uncheck1 != data) {
    		uncheck1 = data;
    		document.getElementById('airport_fasttrack').value = 25;
    	} else {
    		data.checked = false;
    		uncheck1 = null;
    		document.getElementById('airport_fasttrack').value = 0;
    	}
    	
    	get_check();
    }

    function extra4 (data) {
    	if (uncheck1 != data) {
    		uncheck1 = data;
    		document.getElementById('airport_fasttrack').value = 40;
    	} else {
    		data.checked = false;
    		uncheck1 = null;
    		document.getElementById('airport_fasttrack').value = 0;
    	}
    	
    	get_check();
    }

    function get_check () {
    	var month = document.getElementById('month').value;
		var purpose = document.getElementById('purpose').value;
		var country = document.getElementById('country').value;
		var time = document.getElementById('time').value;
		time = Number(time);
        var airport_fasttrack = document.getElementById('airport_fasttrack').value;
        airport_fasttrack = Number(airport_fasttrack);
		var level = document.getElementById('level').value;
		level = Number(level);
		var add = 0;

		if (purpose == 1) {
			if (country == 'China' || country == 'India' || country == 'South Africa') {
				add = 10;
			}
			if (country == 'Afghanistan' || country == 'Algeria' || country == 'Bangladesh' || country == 'Jordan' || country == 'Kuwait' || country == 'Lebanon' || country == 'Mozambique' || country == 'Moroto' || country == 'Namibia' || country == 'Iran' || country == 'Iraq' || country == 'Qatar' || country == 'Saudi Arabia' || country == 'UAE' || country == 'Sudan' || country == 'Syria' || country == 'Srilanka' || country == 'Tanzania' || country == 'Uganda' || country == 'Zambia') {
				add = 170;
			}
			if (country == 'Nigeria') {
				add = 700;
			}
			if (country == 'Libya') {
				add = 300;
			}
		}
		if (purpose == 2) {
			if (country == 'China' || country == 'India' || country == 'South Africa') {
				add = 30;
			}
			if (country == 'Afghanistan' || country == 'Algeria' || country == 'Bangladesh' || country == 'Jordan' || country == 'Kuwait' || country == 'Lebanon' || country == 'Mozambique' || country == 'Moroto' || country == 'Namibia' || country == 'Iran' || country == 'Iraq' || country == 'Qatar' || country == 'Saudi Arabia' || country == 'UAE' || country == 'Sudan' || country == 'Syria' || country == 'Srilanka' || country == 'Tanzania' || country == 'Uganda' || country == 'Zambia') {
				add = 170;
			}
			if (country == 'Nigeria') {
				add = 700;
			}
			if (country == 'Libya') {
				add = 300;
			}
		}
		//////
		if (purpose == 1) {
			if (time == 200) {
				if (month == 1) {
					document.getElementById('report').innerHTML = 220 + add + level + airport_fasttrack;
					document.getElementById('price').value = 220 + add + level + airport_fasttrack;
				}
				if (month == 2) {
					document.getElementById('report').innerHTML = 245 + add + level + airport_fasttrack;
					document.getElementById('price').value = 245 + add + level + airport_fasttrack;
				}
				if (month == 3) {
					document.getElementById('report').innerHTML = 255 + add + level + airport_fasttrack;
					document.getElementById('price').value = 255 + add + level + airport_fasttrack;
				}
				if (month == 4) {
					document.getElementById('report').innerHTML = 275 + add + level + airport_fasttrack;
					document.getElementById('price').value = 275 + add + level + airport_fasttrack;
				}
			} else {
				if (month == 1) {
					document.getElementById('report').innerHTML = 10 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 10 + add + time + level + airport_fasttrack;
				}
				if (month == 2) {
					document.getElementById('report').innerHTML = 12 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 12 + add + time + level + airport_fasttrack;
				}
				if (month == 3) {
					document.getElementById('report').innerHTML = 20 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 20 + add + time + level + airport_fasttrack;
				}
				if (month == 4) {
					document.getElementById('report').innerHTML = 30 + add + time + level + airport_fasttrack;
					document.getElementById('price').value = 30 + add + time + level + airport_fasttrack;
				}
			}
			
		}
		if (purpose == 2) {
			if (month == 1) {
				document.getElementById('report').innerHTML = 80 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 80 + add + time + level + airport_fasttrack;
			}
			if (month == 2) {
				document.getElementById('report').innerHTML = 85 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 85 + add + time + level + airport_fasttrack;
			}
			if (month == 3) {
				document.getElementById('report').innerHTML = 115 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 115 + add + time + level + airport_fasttrack;
			}
			if (month == 4) {
				document.getElementById('report').innerHTML = 125 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 125 + add + time + level + airport_fasttrack;
			}
			if (month == 5) {
				document.getElementById('report').innerHTML = 320 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 320 + add + time + level + airport_fasttrack;
			}
			if (month == 6) {
				document.getElementById('report').innerHTML = 430 + add + time + level + airport_fasttrack;
				document.getElementById('price').value = 430 + add + time + level + airport_fasttrack;
			}
		}

		if (country == '') {
			document.getElementById('report').innerHTML = 0;
			document.getElementById('price').value = 0;
		}
    }
</script>