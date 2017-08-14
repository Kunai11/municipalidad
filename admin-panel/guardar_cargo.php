<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {

        include('../cn/bdconexion.php');
        $codigo_cargo = $_POST['codigo_cargo'];
        $nombre = $_POST['nombre_cargo'];
        
        

        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM cargos WHERE Cod_Cargo='$codigo_cargo'") or die(mysqli_error());
        $rowExiste=mysqli_fetch_array($queryVerificar);
        if ($rowExiste['Existe']==0) {
            $queryGuardar = mysqli_query($db, "INSERT INTO cargos (Cod_Cargo, Nom_Cargo) VALUES ('$codigo_cargo', '$nombre') ") or die(mysqli_error());
            echo 'Guardado';
   

        } 
        if ($rowExiste['Existe']==1) {
            #echo 'Ya existe';
        }
            
    } else {
        header('location: page_denegado.php');
    }


?>