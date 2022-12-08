<?php
session_start();
if(!$_SESSION['userid'] && !$_SESSION['name']){
  echo "Please Login";
  echo "<meta http-equiv='refresh' content=0.1;url='login.php'>";
}
echo $_SESSION['name'];
?>