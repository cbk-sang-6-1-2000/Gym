<?php
session_start();
require_once ('../../csdl/helper.php');
if(($_SESSION['congviec']) != "Quản lý"){
    echo '<script>alert("Bạn không có quyền truy cập vào !!!")</script>';
    echo '<script>window.location.href = "../khachhang/index.php";</script>';	
}
if(isset($_POST['Tendv'])){
    $Tendv = $_POST["Tendv"];    
    $Gia = $_POST["Gia"];

    $qry = "INSERT INTO dichvu(Tendv,Gia) values ('$Tendv','$Gia')";
    $result = mysqli_query($con,$qry); 
		header('Location:index.php');
		die();
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Quản lý Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../../style/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../style/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../style/css/fullcalendar.css" />
<link rel="stylesheet" href="../../style/css/matrix-style.css" />
<link rel="stylesheet" href="../../style/css/matrix-media.css" />
<link href="../../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../../style/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Perfect Gym Admin</a></h1>
</div>
<?php include '../includes/topheader.php'?>

<!--sidebar-menu-->
<?php $page='khachhang-them'; include '../includes/sidebar.php'?>
<!--sidebar-menu-->
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="../admin/index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i>Trang Chủ</a> <a href="#" class="tip-bottom">Quản lý khách hàng</a> <a href="#" class="current">Thêm khách hàng</a> </div>
  <h1>Form đăng ký</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid" style="display: flex;
  justify-content: center;
  align-items: center;">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Thông tin khách hàng</h5>
        </div>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Tên dịch vụ :</label>
              <div class="controls">
                <input type="text" class="span11" name="Tendv" placeholder="Nhập Tên dịch vụ" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Giá dịch vụ :</label>
              <div class="controls">
                <input type="text" class="span11" name="Gia" placeholder="Nhập Giá dịch vụ" />
              </div>
            </div>
            <div class="form-actions text-center">
              <button type="submit" class="btn btn-success">Thêm dịch vụ</button>
            </div>
            </form>
          </div>
        </div>
        </div>
      </div>
	</div>
  </div>
</div>


<style>
#footer {
  color: white;
}
    </style>
    <script src="../../style/js/excanvas.min.js"></script> 
    <script src="../../style/js/jquery.min.js"></script> 
    <script src="../../style/js/jquery.ui.custom.js"></script> 
    <script src="../../style/js/bootstrap.min.js"></script> 
    <script src="../../style/js/jquery.flot.min.js"></script> 
    <script src="../../style/js/jquery.flot.resize.min.js"></script> 
    <script src="../../style/js/jquery.peity.min.js"></script> 
    <script src="../../style/js/fullcalendar.min.js"></script> 
    <script src="../../style/js/matrix.js"></script> 
    <script src="../../style/js/matrix.dashboard.js"></script> 
    <script src="../../style/js/jquery.gritter.min.js"></script> 
    <script src="../../style/js/matrix.interface.js"></script> 
    <script src="../../style/js/matrix.chat.js"></script> 
    <script src="../../style/js/jquery.validate.js"></script> 
    <script src="../../style/js/matrix.form_validation.js"></script> 
    <script src="../../style/js/jquery.wizard.js"></script> 
    <script src="../../style/js/jquery.uniform.js"></script> 
    <script src="../../style/js/select2.min.js"></script> 
    <script src="../../style/js/matrix.popover.js"></script> 
    <script src="../../style/js/jquery.dataTables.min.js"></script> 
    <script src="../../style/js/matrix.tables.js"></script> 

<script type="text/javascript">

  function goPage (newURL) {
      if (newURL != "") {
          if (newURL == "-" ) {
              resetMenu();            
          }       
          else {  
            document.location.href = newURL;
          }
      }
  }
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
