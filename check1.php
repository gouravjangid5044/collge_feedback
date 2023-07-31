<?php
date_default_timezone_set('Asia/Kolkata');
$con=mysqli_connect("localhost","root","","sitedatabase");
$query="DESC `inputs`";
$sql=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($sql);
echo $rows['name'];
?>