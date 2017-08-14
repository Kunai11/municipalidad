<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {

        include('../cn/bdconexion.php');
        $codigo_depto = $_POST['codigo_depto'];
        $nombre = $_POST['nombre_depto'];
        
        

        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM departamentos WHERE Cod_Dep='$codigo_depto'") or die(mysqli_error());
        $rowExiste=mysqli_fetch_array($queryVerificar);
        if ($rowExiste['Existe']==0) {
            $queryGuardar = mysqli_query($db, "INSERT INTO departamentos (Cod_Dep, Nom_Dep) VALUES ('$codigo_depto', '$nombre') ") or die(mysqli_error());
            echo 'Guardado';
   

        } 
        if ($rowExiste['Existe']==1) {
            #echo 'Ya existe';
        }
            
    } else {
        header('location: page_denegado.php');
    }


?>
