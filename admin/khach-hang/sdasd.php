<form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input name="ma_kh" value="DucNH" class="form-control" readonly="">
                </div>
                <div class="form-group col-sm-6">
                    <label>HỌ VÀ TÊN</label>
                    <input name="ho_ten" value="Nguyễn Hoàng Đức" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>MẬT KHẨU</label>
                    <input name="mat_khau" value="iloveyou" class="form-control" type="password">
                </div>
                <div class="form-group col-sm-6">
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input name="mat_khau2" value="iloveyou" class="form-control" type="password">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>ĐỊA CHỈ EMAIL</label>
                    <input name="email" value="ducnh@gmail.com" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="hidden" value="maxresdefault.jpg">
                    <input name="up_hinh" type="file" class="form-control">
                    (maxresdefault.jpg)
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>KÍCH HOẠT?</label>
                    <div class="form-control">
                        <label class="radio-inline"><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                        <label class="radio-inline"><input checked="" name="kich_hoat" value="1" type="radio">Kích hoạt</label>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label>VAI TRÒ</label>
                    <div class="form-control">
                        <label class="radio-inline"><input checked="" name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label class="radio-inline"><input name="vai_tro" value="1" type="radio">Nhân viên</label>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="form-group col-sm-12">
                    <button name="btn_update" class="btn btn-default">Cập nhật</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    <a href="index.php" class="btn btn-default">Thêm mới</a>
                    <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>                
                </div>
            </div>
        </form>