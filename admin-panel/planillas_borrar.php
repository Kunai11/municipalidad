<?php
    #session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {

        include('../cn/bdconexion.php');
        $codigo = $_POST['codigo_planilla'];

        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Cod_Planilla='$codigo'") or die(mysqli_error());
        $rowExiste=mysqli_fetch_array($queryVerificar);
        if ($rowExiste['Existe']==1) {
            $queryBorrar = mysqli_query($db, "DELETE FROM planillas WHERE Cod_Planilla='$codigo'") or die(mysqli_error());
            echo 'Borrado';
        }
        if ($rowExiste['Existe']==0) {
            #echo 'No existe';
        } 
        
            
    } else {
        header('location: page_denegado.php');
    }
?>