<?php
    $products = $cart->getCart();
    $totalPrice = 0;
?>
<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"../functions/action_cart_tmp.php", 
                     url1:"..themes/dpgreen/cart-detail", 
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          // alert("Product has been Added into Cart"); 
                          // window.location = '/cart-detail';
                          if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                              window.location = '/cart-detail';
                          }else{
                              location.reload();
                          }

                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                // $.ajax({  
                //      url:"action.php",  
                //      method:"POST",  
                //      dataType:"json",  
                //      data:{product_id:product_id, action:action},  
                //      success:function(data){  
                //           $('#order_table').html(data.order_table);  
                //           $('.badge').text(data.cart_item);  
                //      }  
                // });  
                // alert(product_id);

                // var xhttp = new XMLHttpRequest();
                // xhttp.onreadystatechange = function() {
                //   if (this.readyState == 4 && this.status == 200) {
                //    // document.getElementById("demo").innerHTML = this.responseText;
                //    // alert(this.responseText);
                //    // alert('thanh cong.');
                //    window.location.href = "/cart-payment";
                //   }
                // };
                // xhttp.open("POST", "/themes/dpgreen/ajax-remove-cart.php", true);
                // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // xhttp.send("action1=add_cart&product_id="+product_id+"&action=remove");
                // xhttp.send();

                 $.ajax({  
                     url:"../functions/action_cart_tmp.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                // $.ajax({  
                //      url :"action.php",  
                //      method:"POST",  
                //      dataType:"json",  
                //      data:{product_id:product_id, quantity:quantity, action:action},  
                //      success:function(data){  
                //           $('#order_table').html(data.order_table);  
                //      }  
                // });

                // alert(quantity);  
                //  var xhttp = new XMLHttpRequest();
                // xhttp.onreadystatechange = function() {
                //   if (this.readyState == 4 && this.status == 200) {
                //    // document.getElementById("demo").innerHTML = this.responseText;
                //    // alert(this.responseText);
                //    // alert('thanh cong.');
                //    setTimeout(function(){ window.location.href = "/cart-payment"; }, 2000);
                //   }
                // };
                // xhttp.open("POST", "/themes/dpgreen/ajax-quantity-cart.php", true);
                // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // xhttp.send("action1=add_cart&product_id="+product_id+"&quantity="+quantity+"&action=quantity_change");
                // xhttp.send();

                 $.ajax({  
                     url :"../functions/action_cart_tmp.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                }); 
           }  
      });  
 });  
 </script>
<?php 
	if (isset($_POST['txtName'])){
		$cart->payment1();
		?>
		<!-- <script type="text/javascript">
			alert('Đặt hàng thành công');
		</script> -->
		<?php 
	}
?>
<div id="Content-Payment">
    <div class="Center-Width">
        <div class="Infor-Width">
            <div class="box_payment">
            <?php include DIR_BREADCRUMBS."MS_BREADCRUMS_VIETNAMFASTTRACK_0001.php";?>
                <div class="gb-cart-payment">
                    <div class="container">
                        <div class="row" id="Content-mainSlide">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="tabbable-panel">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_default_1" data-toggle="tab">Thanh toán khi nhận hàng</a>
                                            </li>
                                            <li>
                                                <a href="#tab_default_2" data-toggle="tab">Thanh toán trực tuyến </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_default_1">
                                                <div class="gb-thanhtooan-khi-nhanhang">
                                                    <div class="title_form">
                                                        <h1>Địa chỉ giao hàng</h1>
                                                    </div>
                                                    <form action="" method="POST" role="form" id="formPayment">
                                                        <div class="form-group">
                                                            <label for="inputTxtName">Họ tên</label>
                                                            <input type="text" class="form-control" name="txtName" id="inputTxtName" placeholder="Nhập Họ Tên" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Email</label>
                                                            <input type="email" class="form-control" name="txtEmail" id="inputTxtEmail" placeholder="Nhập Email" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Điện thoại <span style="color:#C03;">(*)</span></label>
                                                            <input type="tel" class="form-control" name="txtPhone" id="inputTxtPhone" placeholder="Nhập Số Điện Thoại" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Địa chỉ <span style="color:#C03;">(*)</span></label>
                                                            <input type="text" class="form-control" name="txtAddress" id="inputTxtAddress" placeholder="Nhập Địa Chỉ Nhận Hàng" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Ghi chú	</label>
                                                            <textarea name="txtNote" id="inputTxtNote" name="txtNote" class="form-control" rows="3" placeholder="Ghi chú đơn hàng"></textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary" id="submitPayment">Hoàn Tất Mua Hàng</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_default_2">
                                                <div class="gb-thanhtoan-tructuyen">
                                                    <div id="nglg">
                                                        <?php
                                                        if(!empty($_SESSION["shopping_cart"]))
                                                        {
                                                            $total = 0;
                                                            foreach($_SESSION["shopping_cart"] as $keys => $values)
                                                            {
                                                                ?>
                                                                <input type="hidden" name="name[]" value="<?= $values['product_name'] ?>" form="nganluong" readonly >
                                                                <input type="hidden" name="price[]" value="<?= $values['product_price'] ?>" form="nganluong" readonly >
                                                                <input type="hidden" name="quantity[]" value="<?= $values['product_quantity'] ?>" form="nganluong" readonly >
                                                                <input type="hidden" name="link[]" value="<?= $_SERVER['SERVER_NAME'] . '/' . vi_en1($values['product_name']) ?>" form="nganluong" readonly >
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php include_once dirname(__FILE__) . "/../../functions/nganLuong/nganluong.php"; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 infor_cart">
                                <div class="gb-thongtin-donhang">
                                    <div class="title_form">
                                        <p style="margin:0.67em 0px; font-size:22px;">Thông tin đơn hàng</p>
                                    </div>
                                    <div class="table-responsive" id="order_table">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 40%;">Product Name</th>
                                                <th style="width: 7%;">Quantity</th>
                                                <th style="width: 25%;">Price</th>
                                                <th style="width: 25%;">Total</th>
                                                <th style="width: 3%;">Action</th>
                                            </tr>
                                            <?php
                                            if(!empty($_SESSION["shopping_cart"]))
                                            {
                                                $total = 0;
                                                foreach($_SESSION["shopping_cart"] as $keys => $values)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $values["product_name"]; ?></td>
                                                        <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>
                                                        <td><?php echo number_format($values["product_price"]); ?> VNĐ</td>
                                                        <td><?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?> VNĐ</td>
                                                        <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                    </tr>
                                                    <?php
                                                    $total = $total + ($values["product_quantity"] * $values["product_price"]);
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="3" align="right">Total</td>
                                                    <td align="right"><?php echo number_format($total, 2); ?> VNĐ</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" align="right">
                                                        <form method="post" action="/cart-payment">
                                                            <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <a class="btn btn-default pull-right" href="/gio-hang" role="button" style="background-color:#48BD2B; border:none; font-weight:bold; color:#fff;">Mua Hàng Tiếp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>