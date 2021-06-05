<?php 
  include("../conection.php");

  $name = $_POST['first_name'];
  
  $reponse = "";
  $result = $DB->query("SELECT * FROM customers WHERE first_name LIKE '%$name%'");
 
  if (mysqli_num_rows($result) > 0) {
    $output = '<ul class="box list-unstyled">';

    while ($row = mysqli_fetch_array($result)) {
     $output .= '<li data-id="'.$row['id'] .'">'.$row['first_name'].'</li>';
    }
    $output .= '</ul>';

  } else {
      echo '<div class="notification is-warning is-light" ><em>Opps! lo sentimos no se ha encontrado ninguna propiedad </em></div>';
  }


  if (!$result) {
    die("Query Failed.");
  } 

  echo $output;
    // print_r($output);


?>