<?php
//Include the database configuration file
include 'Conexion/Conexion.php';

if(!empty($_POST["IDProvincia"])){
    //Fetch all state data
    $query = $con->query("SELECT * FROM Canton WHERE IDProvincia = ".$_POST['IDProvincia']." ORDER BY IDCanton ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value=""></option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['IDCanton'].'">'.$row['Canton'].'</option>';
        }
    }else{
        echo '<option value="">Cantón no disponible</option>';
    }
}elseif(!empty($_POST['IdCanton'])&&!empty($_POST['IdProvinciaC'])){
    //Fetch all city data
    $query = $con->query("SELECT * FROM Distrito WHERE FK_Canton = '".$_POST['IdCanton']."' AND FK_Provincia= ".$_POST['IdProvinciaC']." ORDER BY IDDistrito ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value=""></option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['IDDistrito'].'">'.$row['Distrito'].'</option>';
        }
    }else{
        echo '<option value="">Distrito no disponible</option>';
    }
}
?>