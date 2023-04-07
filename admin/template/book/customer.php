<?php 
$rows_customer = $action->getList('customer','','','id','desc',$trang,20,'customer');//var_dump($rows_visa);die();
?>

<div class="container">
  <h2>Bảng book.</h2>            
  <table class="table" style="">
    <thead>
      <tr>
      	<th>Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows_customer['data'] as $item) { ?>
      <tr>
        <td><a href="/admin/?page=book&id=<?= $item['id'] ?>"><?= $item['name'] ?></a></td>
        <td><?= $item['email'] ?></td>
        <td><?= $item['phone'] ?></td>
      </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
<?php
    echo $rows_customer['paging'];
?>