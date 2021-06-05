<?php
include("../conection.php");

  $name = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $scheduling =$_POST['date'];

  $reponse = "";

  // Validate
  if(empty(trim($name)) || empty(trim($last)) || empty(trim($email))  || empty(trim($phone)) || empty(trim($city)) || empty(trim($scheduling))){
    $response = "error"; 

  } else {
    $result = $DB->query("INSERT INTO customers (first_name,last_name,email,phone,city,scheduling) VALUES ('$name','$last','$email','$phone','$city','$scheduling')");
  }

  if (!$result) {
    $response = "error";
  } else {
    $response = "success";
  }

  echo $response;

?>