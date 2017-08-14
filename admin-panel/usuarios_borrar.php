<?php
    // Iniciar Sesion
    session_start();
    //Seguridad de acceso
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $codigo = $_POST['codigo_usuario'];

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM usuarios WHERE Cod_Usuario='$codigo'") or die(mysqli_error());
        //Variable que guarda los datos obtenidos
        $rowExiste=mysqli_fetch_array($queryVerificar);
        //Si la variable anterior contiene datos [ya lo encontro]
        if ($rowExiste['Existe']==1) {
            // Guardar en variable el resultado del query de ELIMINACION
            $queryBorrar = mysqli_query($db, "DELETE FROM usuarios WHERE Cod_Usuario='$codigo'") or die(mysqli_error());

            //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se ELIMINO
            echo 'Borrado';
        }

        //Si la variable anterior no contiene datos [no lo encontro]
        if ($rowExiste['Existe']==0) {
            //No imprimir nada, para que el metodo .ajax(); de jQuery Funcione y sepa que NO se ELIMINO
            #echo 'No existe';
        } 
            
    } else {
        header('location: page_denegado.php');
    }
?>