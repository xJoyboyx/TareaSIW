<?php



$title = $_POST['title'];
$description = $_POST['description'];
$responsable_id = $_POST['responsable_id'];

include('conexion.php');

  
$query = 
    "INSERT INTO incidente_animal 
    (title, description, animal_id) 
    VALUES ('".$title."',
     '".$description."',
      '$responsable_id');";


//$result = mysqli_query($conn, $query);

if (!mysqli_query($conn, $query)) {
    echo("Error description: " . mysqli_error($conn));
}else{

    echo "resultado";
    header('location:index.php');
}


?>