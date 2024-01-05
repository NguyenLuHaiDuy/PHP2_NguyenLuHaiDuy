<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "lab1php2";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Gọi controller để lấy danh sách người dùng
    require_once '../Bai4/Controller/Controller.php';
    $userController = new UserController($db);
    $users = $userController->getUsers();

    // Hiển thị danh sách người dùng trong view
    require_once '../Bai4/Views/Views.php';
} catch (PDOException $e) {
    echo "Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage();
}
?>