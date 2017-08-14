<?php
    // Iniciar Sesion
    session_start();
    //Seguridad de acceso
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $id_pago = $_POST['id_pago'];
		$cod_dep = $_POST['cod_dep'];
		$cod_cargo = $_POST['cod_cargo'];
		$id_empleado = $_POST['id_empleado'];
		$sueldo_base = $_POST['sueldo_base'];
		$ded_IHSS = $_POST['ded_IHSS'];
		$ded_Esp = $_POST['ded_Esp'];
		$sueldo_neto = $_POST['sueldo_neto'];
		$fecha = $_POST['fecha'];
        $modificado = 'No';

        $fechaArray = explode('-', $fecha);
        $fechaMesAnio = $fechaArray[0] . '-' . $fechaArray[1];

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM historial WHERE Fecha LIKE '$fechaMesAnio-%' AND Id_Empleado = '$id_empleado'") or die(mysqli_error());
        //Variable que guarda los datos obtenidos
        $rowExiste=mysqli_fetch_array($queryVerificar);
        //Si la variable anterior no contiene datos [no lo encontro]
        if ($rowExiste['Existe']==0) {

            // Guardar en variable el resultado del query de INSERCION
            $queryGuardar = mysqli_query($db, "INSERT INTO historial (Id_Pago, Cod_Dep, Cod_Cargo, Id_Empleado, Sueldo_Base, Ded_IHSS, Ded_Especiales, Salario_Neto, Fecha, Modificado) VALUES ('$id_pago', '$cod_dep', '$cod_cargo', '$id_empleado', '$sueldo_base', '$ded_IHSS', '$ded_Esp', '$sueldo_neto', '$fecha', '$modificado') ") or die(mysqli_error());

            //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se INSERTO
            echo 'Guardado';
        } 
        //Si la variable anterior contiene datos [ya lo encontro]
        if ($rowExiste['Existe']==1) {
            //No imprimir nada, para que el metodo .ajax(); de jQuery Funcione y sepa que NO se INSERTO
            #echo 'Ya existe';
        }
            
    } else {
        header('location: page_denegado.php');
    }
?>