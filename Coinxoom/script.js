$(document).ready(function(){
$("#submit").click(function(){
var code = $("#code").val();
var mobile = $("#mobile").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString1 = 'code1='+ code + '&mobile1='+ mobile;
if(code==''||mobile=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsecurity.php",
data: dataString1,
cache: false,
success: function(result){
	document.getElementById("code").value="";
document.getElementById("mobile").value="";
alert(result);
}
});
}
return false;
});
});
$(document).ready(function(){
$("#sub").click(function(){
var code = $("#code").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString2 = 'code1='+ code;
if(code=='')
{
alert("Please Fill Security Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "verify.php",
data: dataString2,
cache: false,
success: function(result){
	document.getElementById("code").value="";
alert(result);
}
});
}
return false;
});
});
