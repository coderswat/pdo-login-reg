<?php
class SignupContr extends SignUp{
  private $name;
  private $email;
  private $pass;
  private $cpass;
public function __construct($name,$email,$pass,$cpass){
  $this->name = $name;
  $this->email = $email;
  $this->pass = $pass;
  $this->cpass = $cpass;
}
public function signupUser(){
 if($this->emptyInput() == false){
   echo "Please Fill All The Field Above";
   exit;
 }
 if ($this->validName() == false) {
     echo "Special Characters Are Not Allowed in Username";
     exit;
 }
 if($this->validEmail() == false){
   echo "Enter A Valid Email Address";
   exit;
 }
 if($this->checkPass() == false){
   echo "password Doesnt mAtch";
   exit;
 }
 if($this->smallPass() == false){
   echo "password Must be 5 characters Long";
   exit;
 }
 if($this->userExist() == false){
   echo "This Username Or Email Already Taken";
   exit;
 }
 $this->setUser($this->name, $this->email, $this->pass);
 
}
private function emptyInput(){
  $result;
  if(empty($this->name) || empty($this->email) || empty($this->pass) || empty($this->cpass)){
    $result = false;
  }
  else{
    $result = true;
  }
  return $result;
}
private function validName(){
  $result;
  if(!preg_match("/^[a-zA-Z0-9]*$/",$this->name)){
    $result = false;
  }
  else{
    $result = true;
  }
  return $result;
}
private function validEmail(){
  $result;
  if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
    $result = false;
  }
  else{
    $result = true;
  }
  return $result;
}
private function checkPass(){
  $result;
  if($this->pass !== $this->cpass){
  $result = false;
}
else{
  $result = true;
}
return $result;
}
private function smallPass(){
  $result;
  if(strlen($this->pass) <5 ){
    $result = false;
  }
else{
  $result = true;
}
return $result;
}
private function userExist(){
  $result;
  if(!$this->checkUser($this->name,$this->email)){
    $result = false;
  }
else{
  $result = true;
}
  return $result;
}
}
class LoginContr extends Login{
  private $name;
  private $pass;
public function __construct($name,$pass){
  $this->name = $name;
  $this->pass = $pass;
}
public function loginUser(){
  if($this->emptyField() == false){
    echo "Please Fill All Fields";
    exit;
  }
  $this->userExist($this->name,$this->pass);
}
  private function emptyField(){
    $result;
   if(empty($this->name || empty($this->pass))){
     $result = false;
   }
   else{
     $result = true;
   }
   return $result;
}
}
?>