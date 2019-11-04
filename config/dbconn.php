<?php
$dbconn = mysqli_connect("sql211.epizy.com","epiz_24393596","f4Ecxsibm1RN4","epiz_24393596_electricks");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Asia/Manila"); 
?>
