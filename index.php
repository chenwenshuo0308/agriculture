<?php
phpinfo();
?>
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
    <title>登录-智慧农业系统</title>
    <link href="css/styles.css" rel="stylesheet" />
   <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      
      crossorigin="anonymous">
      
      </script>
     

    
  </head>
  <body class="bg-primary">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">登录</h3>
                  </div>
                  <div class="card-body">
                    <form id ="loginForm" action="login.php"  method="post" name="loginForm">
                      <div class="form-floating mb-3">
                        <input
                          onchange ="validateForm()"
                          class="form-control"
                          id="inputEmail"
                          type="email"
                          placeholder="name@example.com"
                          name="email"
                          required="required"
                        />
                        <label for="inputEmail">邮箱地址</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input
                         
                          class="form-control"
                          id="inputPassword"
                          type="password"
                          placeholder="Password"
                          name="password"
                          required="required"
                        />
                        <label for="inputPassword">密码</label>
                      </div>
                      <div class="form-check mb-3">
                        <input
                          class="form-check-input"
                          id="inputRememberPassword"
                          type="checkbox"
                          value=""
                        />
                        
        
                        <label
                         
                          class="form-check-label"
                          for="inputPassword"
                          >记住密码</label
                        >
                        
                      </div>
                      <div
                        class="
                          d-flex
                          align-items-center
                          justify-content-between
                          mt-4
                          mb-0
                        "
                      >
                        <a class="small" href="password.html">忘记密码?</a>
       
       
     
                        <input
                          type="submit"
                          class="btn btn-primary"
                          href="login.php"
                          value="确认"
                          ></input>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center py-3">
                    <div class="small">
                      <a href="register.html">还没有账户? 注册一个新账户!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <div id="layoutAuthentication_footer">
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
    <script src="js/remember.js"></script>
  </body>
</html>
