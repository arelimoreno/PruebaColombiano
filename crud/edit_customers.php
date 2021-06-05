<?php
include "../conection.php";

$id = $_POST['id'];
$name = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$scheduling = $_POST['date'];

$reponse = "";

if (empty(trim($name)) || empty(trim($last)) || empty(trim($email)) || empty(trim($phone)) || empty(trim($city))) {
  $response = "error";
} else {
  $result = $DB->query(" UPDATE customers set first_name = '$name', last_name = '$last', email = '$email', phone = '$phone', city = '$city' , scheduling = '$scheduling'  WHERE id=$id");
}

if (!$result) {
  $response = "error";
} else {
  $response = "success";
}

echo $response;
?>