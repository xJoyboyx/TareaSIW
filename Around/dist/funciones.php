
<?php
include('conexion.php');


    function PrintList($sql,$value){
        
        include('conexion.php');
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result)>0){

            echo"<select class='form-control custom-select' name=".$value.">";

              while ($row=mysqli_fetch_row($result)){
                
                echo "<Option value=".$row[0]."> $row[0] -$row[1] - $row[2]";
                	
            }
            echo"</select>";
            mysqli_free_result($result);
        }else{
            echo"<h4>...</h4>";
        }
            
                
    }

    function DisplayTable($sql, $col, $colNames,$edit, $delete){
        
            DisplayTableNames($colNames);
            DisplayFields($sql, $col,$edit, $delete);

    }

    function DisplayFields($sql, $col,$edit, $delete){
        
        include("conexion.php");

        if (!mysqli_query($conn, $sql)) {
            echo("Error description: " . mysqli_error($conn));
        }else{

        $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result)>0){
                $j = 1;
                while ($row=mysqli_fetch_row($result)){
                echo "<tr>";
                echo "<th scope='row'>".$row[0]."</th>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                CheckButtons($edit, $delete);
                    
                echo "</tr>";
                $j++;
                }
            }
        }
    }

    function CheckButtons($edit, $delete){
        if($edit){
            echo "<td>
            <a href='modificaciones.php'>
            <button type='submit' class='btn btn-secondary btn-icon'>
            
            <i class='fe-edit'></i>
            </a>
            </button></td>";
        }
        if($delete){
            echo "
            <td>
            <a href='bajas.php'>
            <button class='btn btn-danger' >  
                <i class='fe-trash'></i>
            </button>
            </a>
            </td>";
        }
    }

    function DisplayTableNames($collection){
        echo " <thead> <tr> <th>ID</th> ";
        foreach($collection as $value){
            echo "<th>$value</th>";
        }
    }


   
?>