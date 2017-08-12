<?php
    #session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {

        include('../cn/bdconexion.php');
        $codigo = $_POST['codigo_planilla'];
        $desc = $_POST['descripcion_planilla'];
        $tipo = $_POST['tipo_planilla'];
        $sueldoBase = $_POST['sueldo_base'];
        $deducIHSS = $_POST['deduc_IHSS'];
        $deducEsp = $_POST['deduc_Esp'];
        $sueldoNeto = $_POST['sueldo_neto'];

        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Cod_Planilla='$codigo'") or die(mysqli_error());
        $rowExiste=mysqli_fetch_array($queryVerificar); 
        if ($rowExiste['Existe']==0) {
            #echo 'No existe';
            echo '';
        }
        if ($rowExiste['Existe']!=0) {
            $queryVerificarTipoYCodigoRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Cod_Planilla='$codigo' AND Tipo='$tipo'") or die(mysqli_error());
            $rowExisteTipoYCodigo=mysqli_fetch_array($queryVerificarTipoYCodigoRepetido); 
            if ($rowExisteTipoYCodigo['Existe']!=0) {
                $queryGuardar = mysqli_query($db, "UPDATE planillas SET Descripcion='$desc', Sueldo_Base='$sueldoBase', Ded_IHSS='$deducIHSS', Ded_Especiales='$deducEsp', Salario_Neto='$sueldoNeto' WHERE Cod_Planilla='$codigo' AND Tipo='$tipo'") or die(mysqli_error());
                echo 'Modificado';
            }
            if ($rowExisteTipoYCodigo['Existe']==0) {
                $queryVerificarTipoRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Tipo='$tipo'") or die(mysqli_error());
                $rowExisteTipo=mysqli_fetch_array($queryVerificarTipoRepetido); 
                if ($rowExisteTipo['Existe']==0) {
                    $queryGuardar = mysqli_query($db, "UPDATE planillas SET Descripcion='$desc', Tipo='$tipo', Sueldo_Base='$sueldoBase', Ded_IHSS='$deducIHSS', Ded_Especiales='$deducEsp', Salario_Neto='$sueldoNeto' WHERE Cod_Planilla='$codigo'") or die(mysqli_error());
                }
                if ($rowExisteTipo['Existe']!=0) {
                    echo '';
                }
            }
        }
            
    } else {
        header('location: page_denegado.php');
    }
?>