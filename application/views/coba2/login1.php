<!DOCTYPE hmtl>
<html>
<head>
<title> MENU LOGIN </title>
<link rel="stylesheet" type = "text/css" href ="style3.css">
</head>

<?php
   session_start();
   if(isset($_SESSION['username'])) 
   header('location:index.php'); 
   require_once("koneksi.php");
?>
<title>Form Login</title>
<div id="frm">
  <form action="proseslogin.php" method="post">
  <div align='center'><h1>Login</h1></div>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  <tr><td></td></tr>
  <tr></tr>
  </tbody>
  </table>
  </form>
</div>

