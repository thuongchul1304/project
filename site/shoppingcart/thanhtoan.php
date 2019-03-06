
<?php 
session_start();
if (!isset($_SESSION['cart'])) {
 header('location:giohang.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;

}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 30%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
     margin-left: 20px;
    -ms-flex: 75%;
    flex: 65%;
}



.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Thông tin khách hàng</h3>   
            <input type="text" id="fname" name="fullname" placeholder="Họ và tên cua bạn (bắt buộc)">
            <input type="text" id="sodt" name="sodt" placeholder="Số điện thoại (bắt buộc)">
            <input type="text" id="adr" name="email" placeholder="Email">
          
            <input type="text" id="city" name="thanhpho" placeholder="Thành phố bạn đang sống">
            <input type="text" id="city" name="address" placeholder="Quận huyện ">
            <input type="text" id="city" name="yeucau" placeholder="Yêu cầu khác">
        
          </div>

          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Địa chỉ giao hàng giống như thanh toán 
        </label>
        <input type="submit" value="Đồng ý thanh toán" class="btn" name="submit">
      </form>
       <?php if (isset($_POST['submit'])) {
        header('location:hoanthanh.php');}?>

    </div>
  </div>
  <div class="col-25">
    <div class="container">

      <h4>Sản phẩm <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo count($_SESSION['cart']) ?></b></span></h4>
     <?php 
              foreach ($_SESSION['cart'] as $key => $value) {
$tongtien=0;
                    ?>
             <p><a href="#"><?php echo $value['name']  ?></a> <span class="price"><?php echo number_format($value['price'],0,'.','.'). 'đ'?> ( <?php echo $_SESSION['cart'][$key]['qty']?> ) </span></p><?php 
                      $tongtien+=$_SESSION['cart'][$key]['price']*$_SESSION['cart'][$key]['qty'];
   
                  }
                  
               ?>
      <hr>
      <p>Tổng tiền <span class="price" style="color:black"><b><?php echo number_format($tongtien,0,'.','.').' đ'; ?></b></span></p>
      <hr>
      <a href="giohang.php" title="">Chọn lại sản phẩm</a>

    </div>
  </div>
</div>
</body>
</html>

