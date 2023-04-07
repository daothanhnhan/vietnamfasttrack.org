<?php 
  function getBook ($id) {
    global $conn_vn;
    $sql = "SELECT * FROM book WHERE customer_id = $id";
    $result = mysqli_query($conn_vn, $sql);
    $rows = array();
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
    }
    return $rows;
  }
  $list = getBook($_GET['id']);

  function getService ($ma) {
    if ($ma == 'cn2f') {
      return 'Connection between any two flights, no buggies';
    }
    if ($ma == 'arr') {
      return 'Arrival';
    }
    if ($ma == 'dep') {
      return 'Departure';
    }
  }

  function getCity ($code) {
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
?>
<?php 
$total_cost = 0;
foreach ($list as $item) { 

  ?>
<div class="container">
  <h2>Bảng book.</h2>            
  <table class="table" style="">
    <thead>
      <tr>
      	<th>Category</th>
        <th>VIP Meet & Assist</th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td>Service</td>
        <td><?= getService($item['type']) ?></td>
      </tr>
      <tr>
        <td>Airport</td>
        <td><?= getCity($item['city']) ?></td>
      </tr>
      <tr>
        <td>Arrival time</td>
        <?php if ($item['time_arr']!='') { ?>
        <td><?= date('l jS \of F Y', strtotime($item['date_arr'])) . ' ' . $item['time_arr'] ?></td>
        <?php } else { ?>
        <td></td>
        <?php } ?>
      </tr>
      <tr>
        <td>Arrival Flight number</td>
        <td><?= $item['number_arr'] ?></td>
      </tr>
      <tr>
        <td>Arrival Cabin class</td>
        <td><?= getCabin($item['cabin_arr']) ?></td>
      </tr>
      <tr>
        <td>Departure time</td>
        <?php if ($item['time_dep']!='') { ?>
        <td><?= date('l jS \of F Y', strtotime($item['date_dep'])) . ' ' . $item['time_dep'] ?></td>
        <?php } else { ?>
        <td></td>
        <?php } ?>
      </tr>
      <tr>
        <td>Departure  Flight number</td>
        <td><?= $item['number_dep'] ?></td>
      </tr>
      <tr>
        <td>Departure  Cabin class</td>
        <td><?= getCabin($item['cabin_dep']) ?></td>
      </tr>
      <tr>
        <td>Lead Passengers Name</td>
        <td><?= $item['name'] ?></td>
      </tr>
      <tr>
        <td>Lead Passengers Mobile</td>
        <td><?= $item['mobile'] ?></td>
      </tr>
      <tr>
        <td>Signboard message</td>
        <td><?= $item['message'] ?></td>
      </tr>
      <tr>
        <td>Number of Passengers</td>
        <td><?= $item['passengers'] ?></td>
      </tr>
      <tr>
        <td>Passengers under 24 months</td>
        <td><?= $item['children'] ?></td>
      </tr>
      <tr>
        <td>Additional information</td>
        <td><?= $item['infor'] ?></td>
      </tr>
      <tr>
        <td>Porter (Baggage Handler)</td>
        <td><?= $item['porter'] ?></td>
      </tr>
      <tr>
        <td>Visa Assistance</td>
        <td><?= $item['visa'] ?></td>
      </tr>
      <tr>
        <td>Price</td>
        <td>$ <?= $item['price'] ?></td>
      </tr>
      <tr>
        <td>Cost</td>
        <td>
        $ <?php 

        $cost = (float)$item['price'] + (float)($item['porter']*10) + (float)($item['visa']*10);
        echo $cost;
        $total_cost += (float)$cost;
        ?>  
        </td>
      </tr>
    </tbody>
  </table>
</div>
<?php $i++; } ?>
<div class="container">
  <table class="table">
    <tr>
      <td>Total Cost</td>
      <td>$ <?= (float)$total_cost ?></td>
    </tr>
    <tr>
      <td>Processing fee</td>
      <td>$ 27.96</td>
    </tr>
    <tr>
      <td>Payment amount</td>
      <td>$ <?= (float)((float)$total_cost + 27.96) ?></td>
    </tr>
  </table>
</div>