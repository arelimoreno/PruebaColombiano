<?php
include "../conection.php";

$id = $_POST['id'];
$reponse = "";
$result = $DB->query(" DELETE FROM properties  WHERE id=$id");

if (!$result) {
    $response = "error";
} else {
    $response = "success";
}
echo $response;
?>
