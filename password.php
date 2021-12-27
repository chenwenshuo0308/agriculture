<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "userdatabase";

// 创建连接
$connect1 = new mysqli($servername, $username, $password, $dbname);
//$connect1->close();
// 检测连接
if ($connect1->connect_error) {
    die("连接失败: " . $connect1->connect_error);
} 
echo "连接成功";



$Email= $_POST["email"];
$Passwd= $_POST["password"];
$sql = "UPDATE Persons SET password ='$Passwd'
WHERE email='$Email'";
 
if ($connect1->query($sql) === TRUE) {
    echo '<script>alert("注册成功");</script>';
    echo '<script type="text/javascript"> window.location.href="index.html"  </script>';

} else {
    echo '<script> alert("注册失败");</script>';
    header("location: register.html");

}
$connect1->close();
?>
