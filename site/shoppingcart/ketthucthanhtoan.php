<?php 
	include '../../dao/pdo.php';
	pdo_get_connection();
	
if(isset($_POST['submit'])){
	$hovaten = $_POST['fullname'];
	$email = $_POST['email'];
	$sodt=$_POST['sodt'];
	$thanhpho=$_POST['thanhpho'];
	$address=$_POST['address'];
	$yeucau=$_POST['yeucau'];
	$_SESSION['hovaten']=$hovaten;
	setcookie('thanhpho', $_POST['thanhpho'], time() + 3600);
	setcookie('address', $_POST['address'], time() + 3600);
	setcookie('yeucau', $_POST['yeucau'], time() + 3600);

	if($hovaten == '' or $sodt =='' or $thanhpho =='' or $email== '' or $address=='' ) {
	 echo "<script>alert('Mời bạn nhập đầy đủ thông tin'); window.location = 'thanhtoan.php';</script>";
	 }else{
		$dt->command("INSERT INTO thongtinkhachhang(hovaten,email,sodt,thanhpho,address) VALUES ('$hovaten','$email','$sodt','$thanhpho','$address')");
		echo "<script>alert('Bạn đã thanh toán thành công'); window.location = 'hoanthanh.php';</script>";
		}
	}

?>

