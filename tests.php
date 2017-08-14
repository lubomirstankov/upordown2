<?php
$site = "google.bg";
$result = file_get_contents('http://upordown.tk/apis/updown/api.php?isonline='.$site);
echo $result;
?>