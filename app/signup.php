<?php

require_once 'DBinfo.php';

//  check username validity
if($_POST['check']){
    $user_name 		= mysql_real_escape_string($_POST['username']);
    try{
      $query = $db_con->prepare("SELECT * FROM fpdb.Members WHERE username=:username");
      $query->execute(array(":username"=>$user_name));
      $count = $query->rowCount();
      if($count>0){
        echo "Username already exists";
      }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

//  get all info and insert into database
if($_POST['submit'])
{
    $user_email 	= mysql_real_escape_string($_POST['email']);
    //  check email validity
    try{
      $query = $db_con->prepare("SELECT * FROM fpdb.Members WHERE email=:email");
      $query->execute(array(":email"=>$user_email));
      $count = $query->rowCount();
      if($count>0){
        echo "This email is already chosen";
      }
      else{
        $user_last 	= mysql_real_escape_string($_POST['fname']);
        $user_first 	= mysql_real_escape_string($_POST['lname']);
        $password 	= mysql_real_escape_string($_POST['password']);
        //password_hash see : http://www.php.net/manual/en/function.password-hash.php
        //$password 	= password_hash( $user_password, PASSWORD_BCRYPT, array('cost' => 11));
        $phone 	= mysql_real_escape_string($_POST['phonenumber']);
        //$joining_date 	= date('Y-m-d H:i:s');
        if(!empty($_POST['membertype'])){
          $membertype = $_POST['membertype'];
          $stmt;
          if($membertype=="farmer"){
            $stmt = $db_con->prepare("INSERT INTO fpdb.Farmers(username, pw, firstName, lastName, phone, email) VALUES(:uname, :pw, :fname; :lname, :phone, :email)");
          }
          else if($membertype=="buyer"){
            $stmt = $db_con->prepare("INSERT INTO fpdb.Buyers(username, pw, firstName, lastName, phone, email) VALUES(:uname, :pw, :fname; :lname, :phone, :email)");
          }
          $stmt->bindParam(":uname",$user_name);
          $stmt->bindParam(":fname",$user_first);
          $stmt->bindParam(":lname",$user_last);
          $stmt->bindParam(":email",$user_email);
          $stmt->bindParam(":pw",$password);
          $stmt->bindParam(":phone",$email);
        }
        if($stmt->execute())
        {
            echo "registered";
        }
        else
        {
            echo "Query could not execute !";
        }
      }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


}

?>
