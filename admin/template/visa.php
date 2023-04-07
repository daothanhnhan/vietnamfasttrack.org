<?php 
    function getPurpose ($id) {
        if ($id == 1) {
            return 'Tourist Visa';
        }
        if ($id == 2) {
            return 'Business Visa';
        }
        return '';
    }

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

    function getDuring ($id) {
        if ($id == 1) {
            return '1-2 Working days [Business hours Monday to Friday]';
        }
        if ($id == 2) {
            return '4-8 Working hours (Rush)';
        }
        if ($id == 3) {
            return '1-2 Hours (Emergency)';
        }
        if ($id == 4) {
            return '10-15 minutes(super urgent service)';
        }
        // if ($id == 5) {
        //     return 'Airport Fasttrack - Normal';
        // }
        // if ($id == 6) {
        //     return 'Airport Fasttrack - VIP';
        // }
        return '';
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

    $rows_visa = $action->getList('visa','','','id','desc',$trang,20,'visa');//var_dump($rows_visa);die();
?>
<div class="container">
  <h2>Bảng Visa.</h2>            
  <table class="table" style="max-width: 230%;width: 230%;">
    <thead>
      <tr>
      	<!-- <th>Type</th> -->
        <th>Country</th>
        <th>Purpose of visit</th>
        <th>Visa type</th>
        <th>Check in</th>
        <th>Check out</th>
        <th>Processing time</th>
        <th>Arrival port</th>
        <th>Extra Service</th>
        <th>Airport Fasttrack</th>
        <th>Money</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Passport number</th>
        <th>Passport expiry</th>
        <th>Primary email</th>
        <th>Alternative email</th>
        <th>Phone number</th>
        <th>Special request</th>
        <th>At</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows_visa['data'] as $item) { ?>
      <tr>
        <!-- <td><?php echo $item['type'];?></td> -->
        <td><?php echo $item['country'];?></td>
        <td><?php echo getPurpose($item['purpose']);?></td>
        <td><?= getTypeVisa($item['month']) ?></td>
        <td><?php echo $item['check_in'];?></td>
        <td><?php echo $item['check_out'];?></td>
        <td><?php echo getDuring($item['during']);?></td>
        <td><?php echo $item['arrival_port'];?></td>
        <td><?= getService($item['service']) ?></td> 
        <td><?= getAirportFasttrack($item['airport_fasttrack']) ?></td>       
        <td><?= $item['price'] ?> $</td>
        <td><?= $item['name'] ?></td>
        <td><?= ($item['gender']==1) ? 'Male' : 'Female' ?></td>
        <td><?= $item['birthday'] ?></td>
        <td><?= $item['passport_number'] ?></td>
        <td><?= $item['passport_expiry'] ?></td>
        <td><?= $item['email1'] ?></td>
        <td><?= $item['email2'] ?></td>
        <td><?= $item['phone'] ?></td>
        <td><?= $item['request'] ?></td>
        <td><?php echo $item['at'];?></td>
      </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
<?php
    echo $rows_visa['paging'];
?>