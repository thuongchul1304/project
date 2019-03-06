<!DOCTYPE html>
<html>
<body>
    <h3>QUẢN LÝ HÀNG HÓA</h3>
    <?php
    if(strlen($MESSAGE)){
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-sm-4">
                <label>MÃ HÀNG HÓA</label>
                <input name="ma_hh" readonly value="<?=$ma_hh?>" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>TÊN HÀNG HÓA</label>
                <input name="ten_hh" value="<?=$ten_hh?>" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>ĐƠN GIÁ</label>
                <input name="don_gia" value="<?=$don_gia?>" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>GIẢM GIÁ</label>
                <input name="giam_gia" value="<?=$giam_gia?>" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>HÌNH ẢNH</label>
                <input name="up_hinh" type="file" class="form-control">
                <input class="form-control" name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)
            </div>
            <div class="form-group col-sm-4">
                <label>LOẠI HÀNG</label>
                <select name="ma_loai">
                    <?php
                    foreach ($loai_select_list as $loai) {
                        if($loai['ma_loai'] == $ma_loai){
                            echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                        }
                        else{
                            echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>HÀNG ĐẶC BIỆT?</label>
                <div class="form-control">
                    <label class="radio-inline"><input  name="dac_biet" value="0" type="radio" <?=$dac_biet?'':'checked'?>>Đặc biệt</label>
                    <label class="radio-inline"><input name="dac_biet" value="1" type="radio"<?=$dac_biet?'checked':''?>>Bình thường</label>
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>NGÀY NHẬP</label>
                <input class="form-control" name="ngay_nhap" value="<?=$ngay_nhap?>">
            </div>
            <div class="form-group col-sm-4">
                <label>SỐ LƯỢC XEM</label>
                <input class="form-control" name="so_luot_xem" readonly value="0" value="<?=$so_luot_xem?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label>MÔ TẢ</label>
                <textarea name="mo_ta" rows="4" class="form-control"><?=$mo_ta?></textarea>
            </div>
            <div class="form-group col-sm-12">
                <button name="btn_update" class="btn btn-default">Cập nhật</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
                <a href="index.php" class="btn btn-default">Thêm mới</a>
                <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
            </div>
        </div>
    </form>
</body>
</html>
