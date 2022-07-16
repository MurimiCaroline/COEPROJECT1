<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $GLOBALS['name'] = $GLOBALS['phone'] = $GLOBALS['emailaddress'] = $GLOBALS['password'] = "";
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $phone = htmlspecialchars(stripslashes(trim($_POST['phonenumber'])));
    $password = htmlspecialchars(stripslashes(trim($_POST['password'])));
    $emailaddress = htmlspecialchars(stripslashes(trim($_POST['emailaddress'])));
    
    $server = 'localhost'; $user = "root"; $password = ""; $db = "customers";
    $query = "INSERT INTO log_in(name, phone, email, password) VALUES('$name', '$phone', '$emailaddress', '$password')";
    $dbb = new mysqli($server, $user, $password, $db);
    if(!$dbb->query($query)){
        die($dbb->error);
    }else{
        exit("Saved");
    }
}

/*
$email = $_POST['email'];
$password = $_POST['pass'];

if (!empty($email) || !empty($password)) {
  $host = "localhost";
  $dbEmail = "root";
  $dbPassword = "";
  $dbname = "customers";

  $conn = new mysqli($host, $dbEmail, $dbPassword, $dbname);

  if (mysqli_connect_error()) {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else {
      $SELECT = "SELECT email From log_in Where email = ? Limit 1";
      $INSERT =="INSERT Into log_in (email, pass) values(?, ?)";

      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->blind_result($email);
      $stmt->store_result();
      $rnum=$stmt->num_rows;
      
      if(&rnum==0){
          $stmt
              }
  }
} else {
    echo "All fields are required";
    die();
}*/
?>