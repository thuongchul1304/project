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
        <div class="alert alert-danger">
            <h3>Quên mật khẩu</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="quen-mk.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh">
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input name="email">
            </div>
            <div>
                <button name="btn_forgot">Tìm lại mật khẩu</button>
            </div>
        </form>
    </body>
</html>
