<?php
session_start();
require_once ('../../csdl/helper.php');
if(($_SESSION['congviec']) != "Quản lý" AND $_SESSION['congviec'] != "Thu ngân" AND $_SESSION['congviec'] != "Kiểm Tra"){
    echo '<script>alert("Bạn không có quyền truy cập vào !!!")</script>';
    echo '<script>window.location.href = "../khachhang/index.php";</script>';	
}

if (!empty($_GET)) {
	if (isset($_GET['id'])) {
        $update = $_GET['id'];
        $qry = "UPDATE thongtinthaydoi SET Trangthai='1' WHERE id='$update'";
        mysqli_query($con, $qry);
        header('Location: dieuchinhthaydoi.php');
        exit;
    }
}

if (!empty($_GET)) {
	if (isset($_GET['id1'])) {
        $saitt = $_GET['id1'];
        $qry = "UPDATE thongtinthaydoi SET Trangthai='2' WHERE id='$saitt'";
        mysqli_query($con, $qry);
        header('Location: dieuchinhthaydoi.php');
        exit;
    }
}

?>