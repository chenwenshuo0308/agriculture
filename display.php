
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
    <title>环境信息</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      href="css/style.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>

    <script src="js/echarts.js"></script>

   <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
          <!-- Navbar Brand-->
          <a class="navbar-brand ps-3" href="home.html">智慧农业管理系统</a>
          <!-- Sidebar Toggle-->
          <button
            class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
            id="sidebarToggle"
            href="#!"
          >
            <i class="fas fa-bars"></i>
          </button>
          <!-- Navbar Search-->
          <form
            class="
              d-none d-md-inline-block
              form-inline
              ms-auto
              me-0 me-md-3
              my-2 my-md-0
            "
          >
            <div class="input-group">
              <input
                class="form-control"
                type="text"
                placeholder="Search for..."
                aria-label="Search for..."
                aria-describedby="btnNavbarSearch"
              />
              <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
          <!-- Navbar-->
          <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="navbarDropdown"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                ><i class="fas fa-user fa-fw"></i
              ></a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
              >
                <li><a class="dropdown-item" href="#!">设置</a></li>
                <li><a class="dropdown-item" href="index.html">登录</a></li>
                <li><a class="dropdown-item" href="register.html">注册</a></li>
                <li> <a class="dropdown-item" href="password.html">忘记密码</a></li>
            </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">注销</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div id="layoutSidenav">
          <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
              <div class="sb-sidenav-menu">
                <div class="nav">
                  <div class="sb-sidenav-menu-heading">主页</div>
                  <a class="nav-link" href="home.html">
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-tachometer-alt"></i>
                    </div>
                    简介
                  </a>
                  <div class="sb-sidenav-menu-heading">环境</div>
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts"
                    aria-expanded="false"
                    aria-controls="collapseLayouts"
                  >
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-columns"></i>
                    </div>
                    实时环境信息
                    <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="display.php">查看信息</a>
                        <a class="nav-link" href="layout-analyse.html">分析信息</a>
                    </nav>
                </div>
                  <div
                    class="collapse"
                    id="collapseLayouts"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion"
                  >
                   
                  </div>
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsePages"
                    aria-expanded="false"
                    aria-controls="collapsePages"
                  >
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-book-open"></i>
                    </div>
                    阈值设置
                    <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="collapsePages"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion"
                  >
                    <nav
                      class="sb-sidenav-menu-nested nav accordion"
                      id="sidenavAccordionPages"
                    >
             
                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav">
                          <a class="nav-link" href="set.html">设置</a>
                      </nav>
                  </div>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="sb-sidenav-footer">
                  <div class="small">登录用户:</div>
                  <div             
                  id="Email"
                  type="text"
                  name="email"
                >
              </div>
            </nav>
          </div>
          <div id="layoutSidenav_content">
            <main >
              <div class="container-fluid px-4">       
            <!-- 为 ECharts 准备一个定义了宽高的 DOM -->
            <div><div id="main1" style=" position: relative;left: 100px;top: 0px;height: 300px;width: 300px;" ></div>
            <div id="main2" style=" position: relative;left: 100px;top: 0px;height: 300px;width: 300px;" ></div></div>
              <div><div id="main3" style=" position:absolute;left: 800px;top: 0px;height: 300px;width: 300px;;" ></div>
              <div id="main4" style=" position: absolute;left: 800px;top: 300px;height: 300px;width: 300px;" ></div></div>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main1'));

    // 指定图表的配置项和数据
    var option = {
                  tooltip: {
                    formatter: '土壤湿度 : {c}%'
                  },
                  series: [
                    {
                      name: 'Pressure',
                      type: 'gauge',min:0,max:100,
                      progress: {
                        show: true
                      },
                      detail: {
                        valueAnimation: true,
                        formatter: '{value}'
                      },
                      data: [
                        {
                          value: 50,
                          name: ''
                        }
                      ]
                    }
                  ]
                };
    function refresh()
    {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {
            //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            // IE6, IE5 浏览器执行代码
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState===4 && xmlhttp.status===200)
            {
                myChart.setOption({
                    series: [
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        },
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        }
                    ]
                });
            }
        }
        xmlhttp.open("GET","/soid",true);
        xmlhttp.send();
    }
    setInterval(function () {
        refresh()
        
    }, 2000);

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
    var myChart2 = echarts.init(document.getElementById('main2'));

    // 指定图表的配置项和数据
    var option2 = {
                  tooltip: {
                    formatter: '光照强度 : {c}%'
                  },
                  series: [
                    {
                      name: 'Pressure',
                      type: 'gauge',min:0,max:250,
                      progress: {
                        show: true
                      },
                      detail: {
                        valueAnimation: true,
                        formatter: '{value}'
                      },
                      data: [
                        {
                          value: 50,
                          name: ''
                        }
                      ]
                    }
                  ]
                };
    function refresh2()
    {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {
            //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            // IE6, IE5 浏览器执行代码
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState===4 && xmlhttp.status===200)
            {
                myChart2.setOption({
                    series: [
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        },
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        }
                    ]
                });
            }
        }
        xmlhttp.open("GET","/light",true);
        xmlhttp.send();
    }
    setInterval(function () {
        refresh2()
    }, 2000);

    // 使用刚指定的配置项和数据显示图表。
    myChart2.setOption(option2);
    var myChart3 = echarts.init(document.getElementById('main3'));

    // 指定图表的配置项和数据
    var option3 = {
                  tooltip: {
                    formatter: '空气温度 : {c}%'
                  },
                  series: [
                    {
                      name: 'Pressure',
                      type: 'gauge',min:-30,max:50,
                      progress: {
                        show: true
                      },
                      detail: {
                        valueAnimation: true,
                        formatter: '{value}'
                      },
                      data: [
                        {
                          value: 50,
                          name: ''
                        }
                      ]
                    }
                  ]
                };
    function refresh3()
    {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {
            //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            // IE6, IE5 浏览器执行代码
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState===4 && xmlhttp.status===200)
            {
                myChart3.setOption({
                    series: [
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        },
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        }
                    ]
                });
            }
        }
        xmlhttp.open("GET","/air_t",true);
        xmlhttp.send();
    }
    setInterval(function () {
        refresh3()
    }, 2000);

    // 使用刚指定的配置项和数据显示图表。
    myChart3.setOption(option3);
    var myChart4 = echarts.init(document.getElementById('main4'));

    // 指定图表的配置项和数据
    var option4 = {
                  tooltip: {
                    formatter: '空气湿度 : {c}%'
                  },
                  series: [
                    {
                      name: 'Pressure',
                      type: 'gauge',min:0,max:100,
                      progress: {
                        show: true
                      },
                      detail: {
                        valueAnimation: true,
                        formatter: '{value}'
                      },
                      data: [
                        {
                          value: 50,
                          name: ''
                        }
                      ]
                    }
                  ]
                };
    function refresh4()
    {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {
            //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            // IE6, IE5 浏览器执行代码
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState===4 && xmlhttp.status===200)
            {
                myChart4.setOption({
                    series: [
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        },
                        {
                            data: [
                                {
                                    value: xmlhttp.responseText
                                }
                            ]
                        }
                    ]
                });
            }
        }
        xmlhttp.open("GET","/air_h",true);
        xmlhttp.send();
    }
    setInterval(function () {
        refresh4()
    }, 2000);

    // 使用刚指定的配置项和数据显示图表。
    myChart4.setOption(option4);
</script>

  </main>
 <?php
/*
function setcheck(){
  $file1=fopen("./soid","r");
  $file2=fopen("./light","r");
  $file3=fopen("./air_h","r");
  $file4=fopen("./air_t","r");    

  $Maxtemperature= $_POST["Maxtemperature"]; //wendu
  $Maxhumidity= $_POST["Maxhumidity"];//shidu
  $Maxillumination= $_POST["Maxillumination"];//光照
  $Maxsoil= $_POST["Maxsoil"];//土壤湿度
  $Mintemperature= $_POST["Mintemperature"]; //wendu
  $Minhumidity= $_POST["Minhumidity"];//shidu
  $Minillumination= $_POST["Minillumination"];//光照
  $Minsoil= $_POST["Minsoil"];//土壤湿度

  $soil1=fgets($file1);
  $illumination2=fgets($file2);
  $humidity3=fgets($file3);
  $temperature4=fgets($file4);
      if($Maxtemperature< $temperature4){
       //   echo '<script>alert("温度过高");</script>';
        // echo "温度过高";
        echo '<script type="text/javascript"> window.location.href="401.html"  </script>';
      }  else if ($Mintemperature> $temperature4)
      {
        echo '<script type="text/javascript"> window.location.href="404.html"  </script>';
      }
      if($Maxhumidity< $humidity3){
       // echo '<script>alert("湿度过高");</script>';
      // echo "湿度过高";
      echo '<script type="text/javascript"> window.location.href="401.html"  </script>';
      }   else if ($Minhumidity>$humidity3)
      {
        echo '<script type="text/javascript"> window.location.href="404.html"  </script>';
      }

      if($Maxsoil< $soil1){
      //  echo '<script>alert("土壤湿度过高");</script>';
      echo '<script type="text/javascript"> window.location.href="401.html"  </script>';
    }   else if ($Minsoil> $soil1)
    {
      echo '<script type="text/javascript"> window.location.href="404.html"  </script>';
    }
      if($Maxillumination< $illumination2){
        //echo '<script>alert("光照过高");</script>';
        echo '<script type="text/javascript"> window.location.href="401.html"  </script>';
      }   else if ($Minillumination>$illumination2)
      {
        echo '<script type="text/javascript"> window.location.href="404.html"  </script>';
      }
  
  
  
  fclose($file1);
  fclose($file2);
  fclose($file3);
  fclose($file4);
*/




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
<script src="js/home.js"></script>
<script src="js/check.js"></script>
</body>
</html>
