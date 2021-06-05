<?php
include("../conection.php");

  $idCustomers = $_POST['customers'];
  $idProperties = $_POST['properties'];
  
  $reponse = "";
  
  if (empty(trim($idCustomers)) || empty(trim($idProperties))) {
      $response = "error";
  } else {
      $result = $DB->query("INSERT INTO prospects (customers_id, properties_id) VALUES ('$idCustomers','$idProperties')");
  }

  if (!$result) {
      $response = "error";
  } else {
      $response = "success";
  }

  echo $response;
