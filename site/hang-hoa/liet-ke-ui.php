<!DOCTYPE html>
<html>
<?php require '../../content/css/box.html' ?>
    <body>
        <div>
            <ul class="homeproduct filter-cate">
                  <?php
            foreach ($items as $item) {
                extract($item);
        ?>
                <li class="" >
    
            <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                    <img width="150" height="150" src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>"  class="img-responsive .img-fluid" style="max-width: 100%;height: auto;>
                <h3 class=""><?=$ten_hh?></h3>
                    <div class="price"><strong> <?=number_format($don_gia,0,'.','.')?>đ</strong></div>
                <label class="discount"><?=number_format($giam_gia,0,'.','.')?>₫</label>
                    <div class="ratingresult">
            <i class="icontgdd-ystar"></i>
            <i class="icontgdd-ystar"></i>
            <i class="icontgdd-ystar"></i>
            <i class="icontgdd-ystar"></i>
            <i class="icontgdd-ystar"></i>
        <span>Số lượt xem :<?=$so_luot_xem?></span>
    </div>

                    <div class="promo noimage">
            <p> Giảm 3 triệu thanh to&#225;n online bằng thẻ Mastercard và <b>2 K.mãi</b> khác</p>
    </div>
    
</li>

               </a>  
                 <?php
            }
        ?>
            </ul>
    

        </div>
    </body>
</html>
