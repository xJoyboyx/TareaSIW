<?php

echo $_POST['id'].", ". $_POST['title'].", ".$_POST['description'].", ".$_POST['responsable_id']."<br>";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$responsable_id = $_POST['responsable_id'];

include('conexion.php');

  
$query = 
    "UPDATE incidente_animal 
    set title='$title', description='$description', animal_id='$responsable_id'
    WHERE id = $id;
      ";


//$result = mysqli_query($conn, $query);

if (!mysqli_query($conn, $query)) {
    echo("Error description: " . mysqli_error($conn));
}else{
    header('location:index.php');
}


?>