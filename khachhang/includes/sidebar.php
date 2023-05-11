<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div id="sidebar"><a href="#" class="visible-phone"><i class="fas fa-tachometer-alt"></i>Trang chủ</a>
  <ul>
    <li class="<?php if($page=='trangchu'){ echo 'active'; }?>"><a href="../pages/index.php"><i class="fas fa-home"></i> <span>Trang chủ</span></a> </li>
    <li class="<?php if($page=='todo'){ echo 'active'; }?>"> <a href="../vieccanlam/index.php"><i class="fas fa-solid fa-pen"></i> <span>Quản lý việc cần làm</span></a>
  </li>
        <li class="<?php if($page=='thaydoi'){ echo 'active'; }?>"><a href="../thaydoi/index.php"><i class="fas fa-clock"></i> <span>Quá trình thay đổi</span></a></li>
    <li class="<?php if($page=='nhacnho'){ echo 'active'; }?>"><a href="../nhacnho/index.php"><i class="fas fal fa-bullhorn"></i> <span>Nhắc nhở</span></a></li>
  </ul>
</div>
</body>
</html>