<?php 
// Променливи
$google = "www.google.com";
$youtube = "www.youtube.com";
$facebook = "www.fb.com";
$result = file_get_contents('http://upordown.tk/apis/updown/api.php?isonline='.$google);
$result2 = file_get_contents('http://upordown.tk/apis/updown/api.php?isonline='.$youtube);
$result3 = file_get_contents('http://upordown.tk/apis/updown/api.php?isonline='.$facebook);
?><!DOCTYPE html>