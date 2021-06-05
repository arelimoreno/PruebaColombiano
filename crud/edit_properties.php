<?php
include("../conection.php");

  $id = $_POST['id'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $build = $_POST['builder'];
  $description = $_POST['description'];
  $contact = $_POST['contact'];

  $reponse = "";

  if (empty(trim($name)) || empty(trim($address))  || empty(trim($description)) || empty(trim($build)) || empty(trim($contact))) {
      $response = "error";
  } else {
      $result = $DB->query(" UPDATE properties set name = '$name', address = '$address', description = '$description', builder = '$build', contact = '$contact'  WHERE id=$id");
  }

  if (!$result) {
       $response = "error";
  } else {
      $response = "success";
  }

  echo $response;
?>