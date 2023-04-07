<?php 
    $rows_visa = $action->getList('arrival_only','','','id','desc',$trang,20,'arrival');//var_dump($rows_visa);die();
?>
<div class="container">
  <h2>Bảng Arrival Only</h2>            
  <table class="table" style="max-width: 230%;width: 230%;">
    <thead>
      <tr>
      	<th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>City</th>
        <th>Arrival Date</th>
        <th>Arrival Flight - Airline & Number</th>
        <th>Arrival Landing Time</th>
        <th>Lead Passenger Name</th>
        <th>Welcome signboard should read</th>
        <th>Lead Passenger Cell/Mobile</th>
        <th>How many passenger in total?</th>
        <th>Any children below 24 months?</th>
        <th>Will any pax need Visa on Arrival?</th>
        <th>Is a buggy required, if available?</th>
        <th>Is a Baggage Porter needed?</th>
        <th>What Cabin Class is being used?</th>
        <th>Do you want a quote? or would you like to book?</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows_visa['data'] as $item) { ?>
      <tr>
        <td><?= $item['name'] ?></td>
        <td><?= $item['email'] ?></td>
        <td><?= $item['country'] ?></td>
        <td><?= $item['city'] ?></td>
        <td><?= $item['arrival_date'] ?></td>
        <td><?= $item['arrival_number'] ?></td>
        <td><?= $item['arrival_landing_time'] ?></td>
        <td><?= $item['lead_passenger_name'] ?></td>
        <td><?= $item['welcome'] ?></td>
        <td><?= $item['lead_passenger_mobile'] ?></td>
        <td><?= $item['how_many'] ?></td>
        <td><?= $item['children'] ?></td>
        <td><?= $item['will'] ?></td>
        <td><?= $item['if'] ?></td>
        <td><?= $item['porter'] ?></td>
        <td><?= $item['what'] ?></td>
        <td><?= $item['want'] ?></td>
      </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
<?php
    echo $rows_visa['paging'];
?>