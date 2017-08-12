<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {

        include('../cn/bdconexion.php');
        $codigo = $_POST['codigo_planilla'];
        $desc = $_POST['descripcion_planilla'];
        $tipo = $_POST['tipo_planilla'];
        $sueldoBase = $_POST['sueldo_base'];
        $deducIHSS = $_POST['deduc_IHSS'];
        $deducEsp = $_POST['deduc_Esp'];
        $sueldoNeto = $_POST['sueldo_neto'];

        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Tipo='$tipo' OR Cod_Planilla='$codigo'") or die(mysqli_error());
        $rowExiste=mysqli_fetch_array($queryVerificar);
        if ($rowExiste['Existe']==0) {
            $queryGuardar = mysqli_query($db, "INSERT INTO planillas (Cod_Planilla, Descripcion, Tipo, Sueldo_Base, Ded_IHSS, Ded_Especiales, Salario_Neto) VALUES ('$codigo', '$desc', '$tipo', '$sueldoBase', '$deducIHSS', '$deducEsp', '$sueldoNeto') ") or die(mysqli_error());
            echo 'Guardado';
        } 
        if ($rowExiste['Existe']==1) {
            #echo 'Ya existe';
        }
            
    } else {
        header('location: page_denegado.php');
    }
?>