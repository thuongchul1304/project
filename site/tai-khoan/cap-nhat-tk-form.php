<!DOCTYPE html>
<html>
    <body>
        <article class="col-sm-9">
                    <div class="row">
        <h3 class="alert alert-danger">CẬP NHẬT TÀI KHOẢN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>" style="max-width: 95%" width='128'>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input name="ma_kh" value="<?=$ma_kh?>" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input name="ho_ten" value="<?=$ho_ten?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ email</label>
                        <input name="email" value="<?=$email?>" class="form-control">
                    </div>
                    <div class="form-group"> 
                        <label>Hình</label>
                        <input name="up_hinh" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <button name="btn_update" class="btn btn-default">Cập nhật</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="<?=$vai_tro?>" type="hidden">
                    <input name="kich_hoat" value="<?=$kich_hoat?>" type="hidden">
                    <input name="mat_khau" value="<?=$mat_khau?>" type="hidden">
                    <input name="hinh" value="<?=$hinh?>" type="hidden">
                </div>
            </div>
        </form>

                    </div>
                </article>
    </body>
