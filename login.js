/**
* Created by Kay on 2016/3/8.
*/
function login() {
var username = document.getElementById("username");
var pass = document.getElementById("password");
if (username.value == "") {
alert("請輸入帳號");
} else if (pass.value  == "") {
alert("請輸入密碼");
} else if(username.value == "account" && pass.value == "password"){
window.location.href="welcome.html";
} else {
alert("請輸入正確的帳號和密碼！")
}
}