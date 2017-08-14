<?php
    // Iniciar Sesion
    session_start();
    //Seguridad de acceso
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $Id_Pago = $_POST['Id_Pago'];
        
        $sql= "SELECT departamentos.*, cargos.*, empleados.*, historial.* FROM departamentos INNER JOIN( cargos INNER JOIN( empleados INNER JOIN historial ON empleados.Id_Empleado=historial.Id_Empleado ) ON cargos.Cod_Cargo=historial.Cod_Cargo ) ON departamentos.Cod_Dep=historial.Cod_Dep WHERE historial.Id_Pago = '".$Id_Pago."';";
        $queryVerPago = mysqli_query($db, $sql) or die(mysqli_error());
        $rowPago=mysqli_fetch_array($queryVerPago);

        $jsondata = array();
        
        $jsondata['Cod_Dep'] = $rowPago['Cod_Dep'];
        $jsondata['Nom_Dep'] = $rowPago['Nom_Dep'];
        $jsondata['Cod_Cargo'] = $rowPago['Cod_Cargo'];
        $jsondata['Nom_Cargo'] = $rowPago['Nom_Cargo'];
        $jsondata['Id_Empleado'] = $rowPago['Id_Empleado'];
        $jsondata['Nom_Empleado'] = $rowPago['Nombres'] . ' ' . $rowPago['Apellido1'] ;
        $jsondata['Sueldo_Base'] = $rowPago['Sueldo_Base'];
        $jsondata['Ded_IHSS'] = $rowPago['Ded_IHSS'];
        $jsondata['Ded_Especiales'] = $rowPago['Ded_Especiales'];
        $jsondata['Sueldo_Neto'] = $rowPago['Salario_Neto'];
        $jsondata['Fecha'] = $rowPago['Fecha'];
        $jsondata['Pago_Extra'] = $rowPago['Pago_Extra'];
        $jsondata['Descripcion_Pago_Extra'] = $rowPago['Descripcion_Pago_Extra'];

        header('Content-type: application/json; charset=utf-8');
        
        echo json_encode($jsondata);
        
        exit();
            
    } else {
        header('location: page_denegado.php');
    }
?>