
<?php 

require '../../global.php';
require '../../content/css/shopping.css';
require '../../content/css/footer.css';
$tongtien=0;

?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>

  <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
  <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet"/>
  <script language="javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link href="<?=$CONTENT_URL?>/css/jquery-ui.min.css" rel="stylesheet"/>
  <script src="<?=$CONTENT_URL?>/js/jquery-ui.min.js"></script>

  <script>
    $(function (){
      $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
    });
  </script>
</head>
<body>
  <div class="container">
    <header class="row">
     <a href="../../site/hang-hoa/liet-ke.php?ma_loai=1" title=""><img src="https://hoanghamobile.com/Uploads/Originals/2018/09/13/201809130251595798_T9-Banner-iPhone-Xs-1-Cate.png" class="img-responsive" alt=""></a>   
   </header>
   <nav class="row">
    <?php require '../layout/menu.php';?>            
  </nav>




  <div class="container"> 
    <form action="update.php" method="POST">
     <table id="cart" class="table table-hover table-condensed"> 
      <thead> 
       <tr> 
        <th style="width:50%">Tên sản phẩm</th> 
        <th style="width:10%">Giá</th> 
        <th style="width:8%">Số lượng</th> 
        <th style="width:22%" class="text-center">Thành tiền</th> 
        <th style="width:10%"> </th> 
      </tr> 
    </thead> 
    <?php 
    if (isset($_SESSION['cart'])) :?>

      <tbody id="tbody">

        <?php foreach ($_SESSION['cart'] as $key => $value):?>

          <tr> 
           <td data-th="Product"> 
            <div class="row"> 
             <div class="col-sm-2 hidden-xs"><img src="../../content/images/products/<?=$value['hinh']?>" alt=""class="img-responsive">
             </div> 
             <div class="col-sm-10"> 
              <h4 class="nomargin"><?=$value['name']?></h4> 
              <p style="font-size: 13px;font-weight: bold"><?=$value['mo_ta']?></p> 
            </div> 
          </div> 
        </td> 
        <td data-th="Price"><?=number_format($value['price'],0,'.','.')?> đ</td> 
        <td data-th="Quantity">
          <input class="form-control text-center" 
          value="<?php echo $value['qty'] ?>" 
          id="qty" name="qty[<?php echo $value['ma_hh']; ?>]"  type="number" >
        
        </td> 
        <td data-th="Subtotal" class="text-center"><?=number_format($value['price']*$value['qty'],0,'.','.')?> đ</td> 
        <td class="actions" data-th="">

          <a href="delete.php?id=<?php echo $value['ma_hh'] ?>" class="btn btn-danger btn-sm"><img src="../../content/images/products/delete.png" width="25px">
          </a>
        </td> 
      </tr> 
      <tr> 



        <?php 
        $tongtien+=$_SESSION['cart'][$key]['price']*$_SESSION['cart'][$key]['qty'];
      endforeach; ?>
      <?php else: ?>
      <h1 style="color:red;text-align: center;">GIỎ HÀNG TRỐNG</h1>
     <?php endif; 

     ?>
   </tbody>
   <tfoot>  
     <tr> 
      <td><a href="../trang-chinh/index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>

       <input type="submit" class="btn btn-warning updatecart"  name="submit" value="Làm mới giỏ hàng" id="muahang" data-key="<?php echo $key ?>">
     </form>
     

   </td> 
   <td colspan="2" class="hidden-xs"> </td> 
   <td class="hidden-xs text-center"><strong><?php   echo number_format($tongtien,0,'.','.')?>đ</strong>
   </td> 
   <td><a href="thanhtoan.php" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
   </td> 
 </tr> 
</tfoot> 
</table>
</div>




</div>
<?php require '../../site/footer.php'; ?>
</body>
</html>
<?php  ?>