<?php
include "connect.php";

mysqli_query($main,"DELETE FROM hunian WHERE nim = '".$_GET['nim']."'");
echo "<script language=javascript>parent.location.href='data.php';</script>";
?>