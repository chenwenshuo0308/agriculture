function check() {
  var pwd1 = document.getElementById("inputPassword").value;
  var pwd2 = document.getElementById("inputPasswordConfirm").value;
  if (parseInt(pwd1) != parseInt(pwd2)) {
    alert("密码不一致");
  }
}
