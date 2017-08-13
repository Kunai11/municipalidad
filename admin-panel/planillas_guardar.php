<?php
    // Iniciar Sesion
    session_start();
    //Seguridad de acceso
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $codigo = $_POST['codigo_planilla'];
        $desc = $_POST['descripcion_planilla'];
        $tipo = $_POST['tipo_planilla'];
        $sueldoBase = $_POST['sueldo_base'];
        $deducIHSS = $_POST['deduc_IHSS'];
        $deducEsp = $_POST['deduc_Esp'];
        $sueldoNeto = $_POST['sueldo_neto'];

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Tipo='$tipo' OR Cod_Planilla='$codigo'") or die(mysqli_error());
        //Variable que guarda los datos obtenidos
        $rowExiste=mysqli_fetch_array($queryVerificar);
        //Si la variable anterior no contiene datos [no lo encontro]
        if ($rowExiste['Existe']==0) {

            // Guardar en variable el resultado del query de INSERCION
            $queryGuardar = mysqli_query($db, "INSERT INTO planillas (Cod_Planilla, Descripcion, Tipo, Sueldo_Base, Ded_IHSS, Ded_Especiales, Salario_Neto) VALUES ('$codigo', '$desc', '$tipo', '$sueldoBase', '$deducIHSS', '$deducEsp', '$sueldoNeto') ") or die(mysqli_error());

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