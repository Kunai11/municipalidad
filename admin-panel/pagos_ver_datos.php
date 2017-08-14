<?php
    // Iniciar Sesion
    session_start();
    //Seguridad de acceso
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $Id_Empleado = $_POST['Id_Empleado'];
        
        $sql= "SELECT planillas.*, cargos.*, departamentos.*, empleados.* FROM departamentos INNER JOIN((planillas INNER JOIN cargos ON planillas.Tipo=cargos.Cod_Cargo) INNER JOIN (empleados INNER JOIN asignaciones ON empleados.Id_Empleado=asignaciones.Id_Empleado) ON cargos.Cod_Cargo=asignaciones.Cod_Cargo) ON departamentos.Cod_Dep=asignaciones.Cod_Dep WHERE empleados.Id_Empleado = '".$Id_Empleado."';";
        $queryVerCargo = mysqli_query($db, $sql) or die(mysqli_error());
        $rowCargo=mysqli_fetch_array($queryVerCargo);

        $jsondata = array();
        
        $jsondata['Cod_Dep'] = $rowCargo['Cod_Dep'];
        $jsondata['Nom_Dep'] = $rowCargo['Nom_Dep'];
        $jsondata['Cod_Cargo'] = $rowCargo['Cod_Cargo'];
        $jsondata['Nom_Cargo'] = $rowCargo['Nom_Cargo'];
        $jsondata['Id_Empleado'] = $rowCargo['Id_Empleado'];
        $jsondata['Nom_Empleado'] = $rowCargo['Nombres'] . ' ' . $rowCargo['Apellido1'] ;
        $jsondata['Sueldo_Base'] = $rowCargo['Sueldo_Base'];
        $jsondata['Ded_IHSS'] = $rowCargo['Ded_IHSS'];
        $jsondata['Ded_Especiales'] = $rowCargo['Ded_Especiales'];
        $jsondata['Sueldo_Neto'] = $rowCargo['Salario_Neto'];

        header('Content-type: application/json; charset=utf-8');
        
        echo json_encode($jsondata);
        
        exit();
            
    } else {
        header('location: page_denegado.php');
    }
?>