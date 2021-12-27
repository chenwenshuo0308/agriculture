function setcheckt() {
  var Mint = document.getElementById("Mintemperature").value; //w温度
  var Maxt = document.getElementById("Maxtemperature").value; //w温度
  if (parseInt(Mint) > parseInt(Maxt)) {
    alert("温度设置错误");
  } else {
  }
}
function setcheckh() {
  var Minh = document.getElementById("Minhumidity"); //湿度

  var Maxh = document.getElementById("Maxhumidity"); //湿度

  if (parseInt(Minh) > parseInt(Maxh)) {
    alert("湿度设置错误");
  } else {
  }
}
function setchecki() {
  var Mini = document.getElementById("Minillumination"); //光照
  var Maxi = document.getElementById("Maxillumination"); //
  if (parseInt(Mini) > parseInt(Maxi)) {
    alert("光照设置错误");
  } else {
  }
}
function setchecks() {
  var Mins = document.getElementById("Minsoil");

  var Maxs = document.getElementById("Maxsoil");

  if (parseInt(Mins) > parseInt(Maxs)) {
    alert("土壤湿度设置错误");
  } else {
  }
}
