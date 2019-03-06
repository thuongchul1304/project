	<footer>
  <div class="container">

    
    
    
    
    <hr class="">
        
    
    <div class="row">


      <div class="col-md-9">
        
        
        
        
  
          
      <div class="row">    
      
      
        <ul class="list-unstyled col-sm-3">
          <li><a href="../hang-hoa/liet-ke.php?ma_loai=1" class="">Điện thoại</a> </li>
          <li><a href="../hang-hoa/liet-ke.php?ma_loai=2" class="">Laptop</a> </li>
          <li><a href="../hang-hoa/liet-ke.php?ma_loai=3" class="">Tablet</a> </li>
 
        </ul>
                <ul class="list-unstyled col-sm-3">
          <li><a href="../tai-khoan/dang-ky.php" class="">Đăng ký thành viên</a> </li>
          <li><a href="../tai-khoan/quen-mk.php" class="">Quên mật khẩu</a> </li>
          <li><a href="#" class="">Campus Maps</a> </li>
          <li><a href="#" class="">Contact UNM</a> </li>
          <li><a href="#" class="">Employment</a> </li>

        </ul>
                <ul class="list-unstyled col-sm-3">
          <li><a href="#" class="">Alumni</a> </li>
          <li><a href="#" class="">Athletics</a> </li>
          <li><a href="#" class="">Campus Maps</a> </li>
          <li><a href="#" class="">Contact UNM</a> </li>
          <li><a href="#" class="">Employment</a> </li>
      
        </ul>
                <ul class="list-unstyled col-sm-3">
          <li><a href="#" class="">Liên hệ</a> </li>
          <li><a href="../site/trang-chinh/gioi-thieu.php" class="">Giới thiệu</a> </li>

        </ul>
      
       
        </div> 
           
          
          
        
      </div>
   
 
   
      
   
      
      

      <div class="col-md-3 footer-buttons">
<a class="btn btn-default btn-lg btn-block" href="../hang-hoa/liet-ke.php?ma_loai=1"><strong><span class="fa-check fa">&nbsp;</span> Điện Thoại</strong> buy</a> 
 <a class="btn btn-default btn-lg btn-block" href="../hang-hoa/liet-ke.php?ma_loai=2"><strong><span class="fa-calendar fa">&nbsp;</span> Laptop </strong> buy</a>
<a class="btn btn-default btn-lg btn-block" href="../hang-hoa/liet-ke.php?ma_loai=3"><strong><span class="fa-gift fa">&nbsp;</span> Tablet</strong>buy</a> 
        
      </div>
    </div>

    <hr>

  </div>
  
  
  
  
  
</footer>
<a href="../shoppingcart/giohang.php" class="stickcart">
        <div><i class="icontgdd-cartstick"></i></div>
        <span>Giỏ hàng có</span> <strong> <?php if (isset($_SESSION['cart'])) {
          echo count($_SESSION['cart']);
        }
        else {
          echo 0;
        } ?> sản phẩm</strong>
    </a>
    <style type="text/css" media="screen">
      .stickcart {
    position: fixed;
    right: 0px;
    bottom: 42px;
    background: #fff;
    border-radius: 40px;
    box-shadow: 10px 0 20px 0 rgba(0,0,0,5);
    font-size: 14px;
    color: #288ad6;
    padding: 0 10px 0 0;
    width: 130px;
    z-index: 99;
}.stickcart div {
    float: left;
    width: 38px;
    height: 38px;
    border-radius: 40px;
    background: lightblue;
    margin: 2px 5px 2px 2px;
}.icontgdd-cartstick {
    background-position: -265px -30px;
    width: 22px;
    height: 18px;
    display: block;
    margin: 11px 0 0 6px;
}[class^="icontgdd-"], [class*="icontgdd-"], [class^="iconmobile-"], [class*="iconmobile-"] {
    background-image: url(https://cdn.thegioididong.com/v2015/Content/desktop/images/V4/icondesktop@1x.png);
    background-repeat: no-repeat;
    display: inline-block;
    height: 20px;
    width: 30px;
    line-height: 30px;
    vertical-align: middle;
}.stickcart span {
    display: block;
    padding: 4px 0 0;
    white-space: nowrap;
}.stickcart strong {
    display: block;
    white-space: nowrap;
}
    </style>