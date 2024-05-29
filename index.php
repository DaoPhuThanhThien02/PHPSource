<?php 
session_start(); // Bắt đầu một phiên làm việc
require_once "./MVC/Brigde.php"; // Gọi đến trang cần dùng
$myApp = new Application(); //tạo ra một đối tượng myApp là đối tượng của Application là một lớp nằm trong thư mục Processing
?>