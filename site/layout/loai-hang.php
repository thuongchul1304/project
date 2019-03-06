<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="panel panel-default">
            <div class="panel-heading" style="background: lightblue;">DANH MỤC<img src="https://www.freeiconspng.com/uploads/what-is-paleo-how-does-paleo-work-list-of-foods-your-kids--paleo--16.png" alt="" width="30"></div>
 <?php
                    require '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai) {
                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                        echo "<a href='$href' class='list-group-item'>$loai[ten_loai]</a>";

                    }
                ?>
                      
        </div>  <div>
           
            </div>
            
        </div>
    </body>
</html>
