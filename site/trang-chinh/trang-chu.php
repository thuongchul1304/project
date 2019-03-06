
<!DOCTYPE html>
<html>

    <?php require '../../content/css/box.html' ?>
    <head>
        <meta charset="UTF-8">
         <script language="javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
         
        <script>
var txt="Bán điện thoại chính hãng giá rẻ 100% ";
var espera=200;
var refresco=null;
function rotulo_title() {
document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(1);
refresco=setTimeout("rotulo_title()",espera);
}
rotulo_title();
</script>
        <style>
            .carousel-inner img{
                margin: 0 auto;
                height: 400px !important;
            }
        </style>
    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
                <?php
                   $items = hang_hoa_select_all();
                    $active = "active";
                    foreach ($items as $item) {
                ?>
                    <div class="item<?=$active?>">
                        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                            <img src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>" />
                        </a>
                        <div class="carousel-caption">
                            <h3 class="text-danger"><?=number_format($item['don_gia'],0,'.','.')?>đ</h3>
                            <p class="text-info"><?=$item['ten_hh']?></p>
                        </div>
                    </div>                
                <?php
                    $active = "";
                    }
                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div style="margin: 20px 0px" class="">
            <img class="img-responsive col-md-12" src="https://fptshop.com.vn/images/topsite.png?v=8" alt="">
        </div>

        <div>
            <ul class="homeproduct filter-cate">

                  <?php

            foreach ($items as $item) {
                extract($item);
        ?>
                <li class="" >
    
            <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                    <img width="150" height="150" src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>" class="img-responsive .img-fluid" style="max-width: 100%;height: auto">
                <h3 class="sanpham_box_id<?php echo $item['ma_hh'] ?>" id="<?php echo $item['ma_hh'];?>"><?=$ten_hh?></h3>
                    <div class="price"><strong> <?=number_format($don_gia,0,'.','.')?>đ</strong></div>
                <label class="discount"><?=number_format($giam_gia,0,'.','.')?>₫</label>
                    <div class="ratingresult">
        <span>Số lượt xem :<?=$so_luot_xem?></span>
    </div>

                    <div class="promo noimage">
            <p> Giảm 3 triệu thanh to&#225;n online bằng thẻ Mastercard và <b>2 K.mãi</b> khác</p>
    </div></a> 
    <div class="btnbuy">
                   
                        <a href="../shoppingcart/addsp.php?id=<?=$item['ma_hh']?>" class="btn_buyins" id="addcart<?php echo $item['ma_hh']?>" class="addcart" >Thêm vào giỏ</a>
                </div>
</li>  
                
                  <?php
            }
        ?>
            </ul>
    

        </div>
 
    </body>
      
</html>
