<?php 
require '../../dao/hang-hoa.php';
session_start();
// lấy id sản phẩm/
$id=isset($_GET['id']) ? (int)$_GET['id'] : '';
$product =hang_hoa_select_by_id($id);
if ($product) {

// kiểm tra tồn tại SS['cart']
 if (isset($_SESSION['cart'])) {
 	// đã tồn tại
 	
 	if (isset($_SESSION['cart'][$id])) 
 	{
 		$_SESSION['cart'][$id]['qty']+=1;
 	}
 	else
 	{
 		$_SESSION['cart'][$id]['qty']=1;
 	}
 	$_SESSION['cart'][$id]['ma_hh']=$product['ma_hh'];
 	$_SESSION['cart'][$id]['name']=$product['ten_hh'];
 	$_SESSION['cart'][$id]['price']=$product['don_gia'];
 	$_SESSION['cart'][$id]['hinh']=$product['hinh'];
	$_SESSION['cart'][$id]['mo_ta']=$product['mo_ta'];

 	$_SESSION['success']='Tồn tại trong giỏ hàng ! Cập nhật mới thành công ';
 	     echo "<script>alert('Đã thêm vào giỏ hàng');window.location = '../trang-chinh/index.php';</script>";
 	exit();
 }
 else
 {
 
 	$_SESSION['cart'][$id]['qty']=1;
 	$_SESSION['cart'][$id]['ma_hh']=$product['ma_hh'];
 	$_SESSION['cart'][$id]['name']=$product['ten_hh'];
 	$_SESSION['cart'][$id]['price']=$product['don_gia'];
 	$_SESSION['cart'][$id]['hinh']=$product['hinh'];
 	$_SESSION['cart'][$id]['mo_ta']=$product['mo_ta'];
 	$_SESSION['success']='Tạo giỏ hàng mới thành công !!!';	
 	 echo "<script>alert('Đã thêm vào giỏ hàng');window.location = '../trang-chinh/index.php';</script>";
 	exit();

}
}
else
{
	$_SESSION['success']='Không tồn tại sản phẩm này!!!';	
 	// header('location:index.php');
 	// exit();
}
