<!DOCTYPE html>
<html>
    <body>
     
            <div>
                
                <div class="panel panel-default">
            <div class="panel-heading" style="background: lightblue">TOP 10 YÊU THÍCH <img src="" alt=""></div>
            <div class="panel-body nn-panel-body container-fluid">
               <marquee direction="up" >  <?php
                     require_once '../../dao/hang-hoa.php';
                     $hh_array = hang_hoa_select_top10();
                     foreach ($hh_array as $hh) {
                         $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                         echo "
                         <div class='row' style='margin:5px 0px'>
                                <div class='col-xs-2'><img style='border: 1px solid silver;' src='$CONTENT_URL/images/products/$hh[hinh]' width='20'></div>
                                <div class='col-xs-10'><a href='$href' style='color:red;font-weight:bold;'>$hh[ten_hh]</a></div>
                            </div>
                        ";
                    }
                ?>

                        
                           </marquee>
                                    </div>
       
            </div>
        </div>
    </body>
</html>
