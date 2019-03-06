<nav class="navbar navbar-inverse" style='background: lightblue;border:none;'>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=$SITE_URL?>/trang-chinh?trang_chu" style="color:black;font-weight:bold">Trang chủ</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=$SITE_URL?>/trang-chinh?gioi_thieu" style="color:black;font-weight:bold">Giới thiệu</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?lien_he" style="color:black;font-weight:bold">Liên hệ</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?gop_y" style="color:black;font-weight:bold">Góp ý</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?hoi_dap" style="color:black;font-weight:bold">Hỏi đáp</a></li>
        <li style="margin-top: 10px">
          <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                    
                    <input name="keywords" placeholder="Bạn cần tìm gì..." class="form-control">
                </form>  </li>
             <!--    <li><a href="" style="color:black;font-weight:bold;/*border:1px solid black;border-radius:30%;*/margin-top:3px;" ><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ hàng <?php echo count($_SESSION['cart']) ?> </a></li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>