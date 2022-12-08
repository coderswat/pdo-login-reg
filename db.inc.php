<?php
class Dbh{
  protected function connection(){
    try{
    $username = "root";
    $password = "";
    $dbh = new PDO('mysql:host=localhost;dbname=register_login',$username,$password);
    return $dbh;
    }
    catch (PDOExeption $e){
      print "Error : " . $e->getMessage() ."<br/>";
      die();
    }
  }
}
?>