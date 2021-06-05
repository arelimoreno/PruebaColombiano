<?php
include("../conection.php");

  $name = $_POST['name'];
  $address = $_POST['address'];
  $description = $_POST['description'];
  $build = $_POST['builder'];
  $contact = $_POST['contact'];
  $reponse = "";

  // Validate address

  if(empty(trim($name)) || empty(trim($address))  || empty(trim($description)) || empty(trim($build)) || empty(trim($contact))){
    $response = "error";   
  } else {
    $result = $DB->query("INSERT INTO properties (name, address, description, builder, contact) VALUES ('$name','$address','$description','$build','$contact')");
  }

  if (!$result) {
    $response = "error";
  } else {
    $response = "success";
  }

  echo $response;

 ?>