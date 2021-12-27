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


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email= $_POST["email"]; 
    $pawd= $_POST["password"];
}
$sql = "SELECT * FROM users";
    $result = $connect1->query($sql);
function panduan( $sql,$result, $email,$pawd)
{   
    if ($result->num_rows > 0) {
        // 输出数据
        while($row = $result->fetch_assoc()) {
           //$id = $row["id"];
            $name=$row["email"];
            $pass=$row["password"];
            if($email==$name&&$pawd== $pass){
                return true;
            }
           // else 
               // return false;
        }
    
    } else {
        return false;
    } 
}

if(panduan( $sql,$result, $email,$pawd)) 
echo '<script type="text/javascript"> window.location.href="home.html"  </script>';
else {
    echo '<script>alert("登录失败");</script>';
    echo '<script type="text/javascript"> window.location.href="index.html"  </script>';
}

//if ($connect1->query($sql) === TRUE) {
 //   echo "数据库创建成功";
//} else {
   // echo "数据库创建失败 " . $connect1->error;
//}

?>
