<?php
    include('conexion.php');

    $id = $_POST['id'];
  
    $query = 
        "DELETE FROM incidente_animal WHERE id=$id;";
   
    if(mysqli_query($conn, $query)){
        header('location:bajas.php');

    }
    header('location:bajas.php');


?>