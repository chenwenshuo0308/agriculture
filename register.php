
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>智慧农业管理系统</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>
    <?php
$servername = "localhost";
$username = "root";
$pass = "12345678";
$dbname = "userdatabase";

// 创建连接
$connect1 = new mysqli($servername, $username, $pass, $dbname);
//$connect1->close();
// 检测连接
if ($connect1->connect_error) {
    die("连接失败: " . $connect1->connect_error);
} 
echo "连接成功";
$First= $_POST["Firstname"];
$Last= $_POST["Lastname"];
$Email= $_POST["email"];
$Passwd= $_POST["password"];
$sql = "INSERT INTO users (Firstname, Lastname, email, password)
VALUES ('$First', '$Last','$Email', '$Passwd')";
 
if ($connect1->query($sql) === TRUE) {
    echo '<script>alert("注册成功");</script>';
    echo '<script type="text/javascript"> window.location.href="index.html"  </script>';

} else {
    echo '<script> alert("注册失败");</script>';
    header("location: register.html");

}
$connect1->close();
?>
    <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; 智慧农业2167</div>
              <div>
                <a href="#">隐私政策</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="js/check.js"></script>
  </body>
</html>
