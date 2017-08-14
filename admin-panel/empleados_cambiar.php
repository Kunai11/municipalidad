<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
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

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM empleados WHERE Id_Empleado='$identidad'") or die(mysqli_error());

        //Variable que guarda los datos obtenidos
        $rowExiste=mysqli_fetch_array($queryVerificar); 

        //Si la variable anterior no contiene datos [no lo encontro]
        if ($rowExiste['Existe']==0) {
            //No imprimir nada, para que el metodo .ajax(); de jQuery Funcione y sepa que NO se MODIFICO
            // porque hubo error de que no encontro el que esta modificando
            #echo 'No existe';
        }
        //Si la variable anterior contiene datos [ya lo encontro]
        if ($rowExiste['Existe']!=0) {
            //Guardar en variable la consulta de si existe un registro con el mismo codigo y tipo del que se ingreso
            //Se realiza para que no muestre error cuando se quiera guardar los cambios del registro cuando no modifico el tipo
            $queryVerificarTipoYCodigoRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM empleados WHERE Id_Empleado='$identidad'") or die(mysqli_error());

            //Variable que guarda los datos obtenidos
            $rowExisteTipoYCodigo=mysqli_fetch_array($queryVerificarTipoYCodigoRepetido); 

            //Si la variable anterior contiene datos [ya lo encontro]
            if ($rowExisteTipoYCodigo['Existe']!=0) {
                // Guardar el resultado del CAMBIO en todos los campos menos el de tipo (que no se modifico)
                $queryGuardar = mysqli_query($db, "UPDATE empleados SET Nombres='$nombre', Apellido1='$p_apellido', Apellido2='$s_apellido', Lugar_Nac='$l_nacimiento', Fecha_Nac='$f_nacimiento', Profesion='$profesion', Domicilio='$domicilio', Telefono='$telefono', Fecha_Ingreso='$f_ingreso', Correo='$correo', Nombre_Emergencia='$nombre_e', Numero_Emergencia='$numero_e', Estado='$estado' WHERE Id_Empleado='$identidad'") or die(mysqli_error());

                //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se INSERTO
                echo 'Modificado';
            }
            //Si la variable anterior no contiene datos [no encontro registro con el mismo tipo y codigo ingresado]
      
        }
            
    } else {
        header('location: page_denegado.php');
    }
?>