<?php
class SignUp extends Dbh{
  protected function checkUser($name,$email){
    $stmt = $this->connection()->prepare('SELECT name FROM users WHERE name = ? OR email = ?;');
    if(!$stmt->execute(array($name,$email))){
      $stmt = null;
      echo "Unknown Error";
      exit;
    }
    $rs;
    if($stmt->rowCount() > 0){
      $rs = false;
    }
    else{
      $rs = true;
    }
    return $rs;
  }
  protected function setUser($name,$email,$pass){
    $stmt = $this->connection()->prepare('INSERT INTO users (name, email, pass) VALUES (?, ?, ?);');
    
    $passhash = password_hash($pass ,PASSWORD_DEFAULT);
    if(!$stmt->execute(array($name, $email, $passhash))){
      $stmt = null;
     echo "Unknown Error";
      exit;
    }
    $stmt = null;
  }
}
class Login extends Dbh {
  protected function userExist($name,$pass){
    $stmt = $this->connection()->prepare('SELECT pass FROM users WHERE name = ? OR email = ?;');
    if(!$stmt->execute(array($name,$pass))){
      $stmt = null;
      echo "Unknown Error 1";
      exit;
    }
    if($stmt->rowCount() == 0){
      $stmt = null;
      echo "User Not Found";
      exit;
    }
    $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkpass = password_verify($pass,$pwdhashed[0]['pass']);
    if($checkpass == false){
      $stmt = null;
      echo "Wrong Password";
      exit;
    }
    elseif($checkpass == true){
      $stmt = $this->connection()->prepare('SELECT * FROM users WHERE name = ? OR email = ? AND pass = ?;');
      if(!$stmt->execute(array($name ,$name, $pass))){
        $stmt = null;
        echo "Unknown Error 3";
        exit;
      }
      if($stmt->rowCount() == 0){
        $stmt = null;
        echo "User Not found";
        exit;
      }
      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
      session_start();
      $_SESSION['userid'] = $user[0]['id'];
      $_SESSION['name'] = $user[0]['name'];
    }
  }
}
?>