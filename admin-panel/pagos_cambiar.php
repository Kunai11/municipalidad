<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $id_pago = $_POST['id_pago'];
		$sueldo_neto = $_POST['sueldo_neto'];
        $pago_extra = $_POST['pago_extra'];
        $descripcion_extra = $_POST['descripcion_extra'];

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM historial WHERE Id_Pago='$id_pago'") or die(mysqli_error());
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
            
            $queryGuardar = mysqli_query($db, "UPDATE historial SET Salario_Neto='$sueldo_neto', Pago_Extra='$pago_extra', Descripcion_Pago_Extra='$descripcion_extra' WHERE Id_Pago='$id_pago'") or die(mysqli_error());

            //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se MODIFICO
            echo 'Guardado';
            }
            
    } else {
        header('location: page_denegado.php');
    }
?>