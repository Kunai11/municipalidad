<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        
        #function agregarPlanilla(){
            include('../cn/bdconexion.php');
            $codigo = $_POST['codigo_planilla'];
            $desc = $_POST['descripcion_planilla'];
            $tipo = $_POST['tipo_planilla'];
            $sueldoBase = $_POST['sueldo_base'];
            $deducIHSS = $_POST['deduc_IHSS'];
            $deducEsp = $_POST['deduc_Esp'];
            $sueldoNeto = $_POST['sueldo_neto'];

            $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Tipo='".$tipo."'") or die(mysqli_error());
            $rowExiste=mysqli_fetch_array($queryVerificar);
            if ($rowExiste['Existe']==0) {
                $queryGuardar = mysqli_query($db, "INSERT INTO planillas (Cod_Planilla, Descripcion, Tipo, Sueldo_Base, Ded_IHSS, Ded_Especiales, Salario_Neto) VALUES ('$codigo', '$desc', '$tipo', '$sueldoBase', '$deducIHSS', '$deducEsp', '$sueldoNeto') ") or die(mysqli_error());
                echo 'Guardado';
                #echo '<input type="hidden" id="respuesta" value="1">';
                #header("location: planillas_listado_completo.php");
            } 
            if ($rowExiste['Existe']==1) {
                #echo '<input type="hidden" id="respuesta" value="0">';
                #echo 'Ya existe';
            }
            
        #}

        // function modificarPlanilla(){
        //     include('../cn/bdconexion.php');
        //     $codigo = $_SESSION['codigo_planilla'];
        //     $desc = $_POST['descripcion_planilla'];
        //     $tipo = $_POST['tipo_planilla'];
        //     $sueldoBase = $_POST['sueldo_base'];
        //     $deducIHSS = $_POST['deduc_IHSS'];
        //     $deducEsp = $_POST['deduc_Esp'];
        //     $sueldoNeto = $_POST['sueldo_neto'];
        //     $queryCambiarUser = mysqli_query($db, "UPDATE usuarios SET Username='$userName', Pass='$newPass' WHERE Cod_Usuario='".$_SESSION['codigoUsuario']."'") or die(mysqli_error());
        // }

        // function eliminarPlanilla(){
        //     include('../cn/bdconexion.php');
        //     $codigo = $_SESSION['codigo_planilla'];
        //     $desc = $_POST['descripcion_planilla'];
        //     $tipo = $_POST['tipo_planilla'];
        //     $sueldoBase = $_POST['sueldo_base'];
        //     $deducIHSS = $_POST['deduc_IHSS'];
        //     $deducEsp = $_POST['deduc_Esp'];
        //     $sueldoNeto = $_POST['sueldo_neto'];

        // }

            
    } else {
        header('location: page_denegado.php');
    }
?>