<?php
date_default_timezone_set("Asia/Hong_Kong");
$currentUnix = time();
echo "Unix Timestamp: ".$currentUnix."<br/>";
echo date("Md, o H:i a", $currentUnix);
?>