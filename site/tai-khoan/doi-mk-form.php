<!DOCTYPE html>
<html>
<style type="text/css">
    label {
        width: 120px;
    }
    form div {
        margin: 5px;
    }
</style>
    <body>
        <h3 class="alert alert-danger">ĐỔI MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="doi-mk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control">
            </div>
            <div class="form-group">
                <label>Mật khẩu cũ</label>
                <input name="mat_khau" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input name="mat_khau2" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu mới</label>
                <input name="mat_khau3" type="password" class="form-control">
            </div>
            <div class="form-group">
                <button name="btn_change" class="btn btn-default">Đổi mật khẩu</button>
            </div>
        </form>
    </body>
</html>
