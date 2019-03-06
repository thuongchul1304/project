<!DOCTYPE html>
<html>
    <body>
        <h3>THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h3>
      <table class="table">
            <thead class="alert-success">
                <tr>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
                            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_loai?></td>
                    <td><?=$so_luong?></td>
                    <td><?=number_format($gia_max,0,'.','.')?> đ</td>
                    <td><?=number_format($gia_min,0,'.','.')?> đ</td>
                    <td><?=number_format($gia_avg,0,'.','.')?> đ</td>
                </tr>
            <?php
                }
            ?>
                        </tbody>
        </table>
       <div class="form-group">
            <a href="index.php?chart" class="btn btn-default">Xem biểu đồ</a>
        </div>
    </body>
</html>
