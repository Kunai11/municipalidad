<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {

        include('../cn/bdconexion.php');
        $identidad = $_POST['identidad'];
        $nombre = $_POST['nombre'];
        $p_apellido = $_POST['p_apellido'];
        $s_apellido = $_POST['s_apellido'];
        $l_nacimiento = $_POST['l_nacimiento'];
        $f_nacimiento = $_POST['f_nacimiento'];
        $profesion = $_POST['profesion'];
        $domicilio = $_POST['domicilio'];
        $telefono = $_POST['telefono'];
        $f_ingreso = $_POST['f_ingreso'];
        $correo = $_POST['correo'];
        $nombre_e = $_POST['nombre_e'];
        $numero_e = $_POST['numero_e'];
        $estado = $_POST['estado'];
        

        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM empleados WHERE Id_Empleado='$identidad'") or die(mysqli_error());
        $rowExiste=mysqli_fetch_array($queryVerificar);
        if ($rowExiste['Existe']==0) {
            $queryGuardar = mysqli_query($db, "INSERT INTO empleados (Id_Empleado, Nombres, Apellido1, Apellido2, Lugar_Nac, Fecha_Nac, Profesion, Domicilio, Telefono, Fecha_Ingreso, Correo, Nombre_Emergencia, Numero_Emergencia, Estado) VALUES ('$identidad', '$nombre', '$p_apellido', '$s_apellido', '$l_nacimiento', '$f_nacimiento', '$profesion', '$domicilio', '$telefono', '$f_ingreso', '$correo', '$nombre_e', '$numero_e', '$estado') ") or die(mysqli_error());
            echo 'Guardado';
        } 
        if ($rowExiste['Existe']==1) {
            #echo 'Ya existe';
        }
            
    } else {
        header('location: page_denegado.php');
    }
?>