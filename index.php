<?php 
error_reporting(ALL);
//Съобщение
$msg = "";
include ("topsites.php");
// $_GET Функция
$check = $_GET['check'];


// Дали е онлайн? *NEW Функция
function isonline($isonline) {
   $curlInit = curl_init($isonline);
   curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($curlInit,CURLOPT_HEADER,true);
   curl_setopt($curlInit,CURLOPT_NOBODY,true);
   curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

   $execute = curl_exec($curlInit);
   curl_close($curlInit);
   if ($execute) return true;
   return false;
}
if ($check) {
if (isonline($check)) {
    $msg = "<center>
<i class='fa fa-plug' aria-hidden='true'></i> Хмм.. Сайта изглежда, че работи! :)
</center>";
} else {
$msg = "<center>
<i class='fa fa-exclamation-triangle'' aria-hidden='true'></i> Ам.. Сайта явно не работи :/
</center>";
}
}


?><!DOCTYPE html>
<!-- HEAD -->
<head>
<title>Работи ли ?</title>
  <meta charset="UTF-8">
  <meta name="description" content="Ping Tool, Ping, Ping, Down Or Up, Hello WOrld, PhP, Fast Programing, Java WEB, FontAwesome, Minecraft, Mainkraf , Site, Kak se pravi sait, Hello, Mainkraft video, mainkrafteri, pakta">
  <meta name="keywords" content="Ping Tool, Ping, Ping, Down Or Up, Hello WOrld, PhP, Fast Programing, Java WEB, FontAwesome, Minecraft, Mainkraf , Site, Kak se pravi sait, Hello, Mainkraft video, mainkrafteri, pakta, anglichani, kak se pravi forum, kak se pravi phpbb forum, zdravei">
  <meta name="author" content="Lubomir Stankov">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css" type="text/css">
    <link rel="stylesheet" href="tbl.css" type="text/css">
    <script src="https://use.fontawesome.com/70b653a479.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<!-- HEAD -->


<!-- BODY -->
<body>
<div class="form-style-5">
<form action="" method="get" autocomplete="off">
<fieldset>
<legend><span class="number"><i class="fa fa-cog fa-spin fa-1x fa-fw"></i></i></span> Работи ли?</legend>
    <br />
<input type="text" name="check" id="urlr" placeholder="http://">
</fieldset>
    <input type="submit" value="Провери?" />
</form>
    <?php echo $msg;?>
    </div>
<center>
<table id="customers">
  <tr>
    <th><center>Google</center></th>
    <th><center>YouTube</center></th>
    <th><center>Facebook</center></th>
  </tr>
  <tr>
    <td><center><i class='fa fa-plug' aria-hidden='true'></i> <font color='green'><?php echo $result; ?></center></td>
    <td><center><i class='fa fa-plug' aria-hidden='true'></i> <font color='green'><?php echo $result2; ?></center></td>
    <td><center><i class='fa fa-plug' aria-hidden='true'></i> <font color='green'><?php echo $result3; ?></center></td>
  </tr>
  <tr>
<br />
<center> <a href="https://github.com/lubomirstankov/upordown2">GitHub</a> </center>
      </center>
<div class="footer"><strong>© <?php echo date("Y"); ?> - <a href="skype:h_eaderror?chat">Stank0V</a>. Всички права запазени. <br />
<style>
.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
</style>
    </body>
<!-- BODY -->
