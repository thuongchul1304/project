<?php 
session_start();
if(isset($_POST['submit'])){
	foreach ($_POST['qty'] as $key => $value) {
		if (($_POST['qty'][$key]==0) and (is_numeric($_POST['qty'][$key]))) {
			// $_SESSION['cart'][$key]['qty']=0;
			unset($_SESSION['cart'][$key]);
		 }else if(($_POST['qty'][$key] > 0) and (is_numeric($_POST['qty'][$key]))){
	 	print_r($_SESSION['cart'][$key]['qty']=$value);
		 }
		}
header('location:giohang.php');

// 		echo "<pre>";
// print_r($_SESSION['cart'][$key]['qty']);
	// foreach ($_SESSION['cart'] as $key => $value) {
	// 	if(($value['qty'] ==0 ) and(is_numeric($value['qty']))){
	// 		unset($_SESSION['cart'][$key]);
	// 	}else if(($value['qty'] > 0) and (is_numeric($value['qty']))){
	// 			echo "<pre>";
	// 			print_r($value['ma_hh'])."<br>";

	// 	}
	// }
	}
