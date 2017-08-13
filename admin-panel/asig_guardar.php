<?php
    // Iniciar Sesion
    session_start();
    //Seguridad de acceso
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $Cod_Dep = $_POST['Cod_Dep'];
        $Cod_Cargo = $_POST['Cod_Cargo'];
        $Id_Empleado = $_POST['Id_Empleado'];

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM asignaciones WHERE (Cod_Dep='$Cod_Dep' AND Cod_Cargo='$Cod_Cargo') OR Id_Empleado='$Id_Empleado'") or die(mysqli_error());
        //Variable que guarda los datos obtenidos
        $rowExiste=mysqli_fetch_array($queryVerificar);
        //Si la variable anterior no contiene datos [no lo encontro]
        if ($rowExiste['Existe']==0) {

            // Guardar en variable el resultado del query de INSERCION
            $queryGuardar = mysqli_query($db, "INSERT INTO asignaciones (Cod_Dep, Cod_Cargo, Id_Empleado) VALUES ('$Cod_Dep', '$Cod_Cargo', '$Id_Empleado') ") or die(mysqli_error());

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