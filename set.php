<?php
$file1=fopen("./soid","r");
$file2=fopen("./light","r");
$file3=fopen("./air_h","r");
$file4=fopen("./air_t","r");

  
        $temperature= $_POST["temperature"]; //wendu
        $humidity= $_POST["humidity"];//shidu
        $illumination= $_POST["illumination"];//光照
        $soil= $_POST["soil"];//土壤湿度
    
  /*
     $soil1=fgets($file1);
     $illumination2=fgets($file2);
     $humidity3=fgets($file3);
     $temperature4=fgets($file4);
    if($temperature< $temperature4){
        echo "温度过高";
    }   
    if($humidity< $humidity3){
        echo "湿度过高";
    }   
    if($soil< $soil1){
        echo "土壤湿度过高";
    }   
    if($illumination< $illumination2){
        echo "光照过高";
    }   



fclose($file1);
fclose($file2);
fclose($file3);
fclose($file4);*/

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "userdatabase";

// 创建连接
$connect = new mysqli($servername, $username, $password, $dbname);
//$connect1->close();
// 检测连接
if ($connect->connect_error) {
    die("连接失败: " . $connect->connect_error);
} 
$Mintemperature = $_POST["Mintemperature"];
$Maxtemperature = $_POST["Maxtemperature"];
$Minhumidity= $_POST["Minhumidity"];
$Maxhumidity= $_POST["Maxhumidity"];
$Minillumination= $_POST["Minillumination"];
$Maxillumination= $_POST["Maxillumination"];
$Minsoil= $_POST["Minsoil"];
$Maxsoil= $_POST["Maxsoil"];

$sql = "UPDATE threshold SET  Mintemperature='$Mintemperature', Maxtemperature='$Maxtemperature',Minhumidity='$Minhumidity', Maxhumidity='$Maxhumidity',Minillumination='$Minillumination',Maxillumination='$Maxillumination',Minsoil='$Minsoil',Maxsoil='$Maxsoil'";


if ($connect->query($sql) === TRUE) {
    echo '<script> alert("设置成功");</script>';
    echo '<script type="text/javascript"> window.location.href="display.php"  </script>';

} else {
    echo '<script> alert("设置失败");</script>';
    header("location: set.html");

}
$connect1->close();
?>