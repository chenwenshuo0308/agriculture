//设置cookie

function setCookie(name, value, day) {
  var date = new Date();
  date.setDate(date.getDate() + day);
  document.cookie = name + "=" + value + ";expires=" + date;
}
//获取cookie
function getCookie(name) {
  var reg = RegExp(name + "=([^;]+)");
  var arr = document.cookie.match(reg);
  if (arr) {
    return arr[1];
  } else {
    return "";
  }
}
//删除cookie
function delCookie(name) {
  setCookie(name, null, -1);
}
window.onload = function () {
  var oUser = document.getElementById("Email");
  //页面初始化时，如果帐号cookie存在则填充
  if (getCookie("inputEmail")) {
    oUser.innerHTML = getCookie("inputEmail");

    oRemember.checked = true;
  }
};
