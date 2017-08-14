<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $codigo_depto = $_POST['codigo_depto'];
        $nombre_depto = $_POST['nombre_depto'];
    

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM departamentos WHERE Cod_Dep='$codigo_depto'") or die(mysqli_error());

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
            $queryVerificarTipoYCodigoRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM departamentos WHERE Cod_Dep='$codigo_depto'") or die(mysqli_error());

            //Variable que guarda los datos obtenidos
            $rowExisteTipoYCodigo=mysqli_fetch_array($queryVerificarTipoYCodigoRepetido); 

            //Si la variable anterior contiene datos [ya lo encontro]
            if ($rowExisteTipoYCodigo['Existe']!=0) {
                // Guardar el resultado del CAMBIO en todos los campos menos el de tipo (que no se modifico)
                $queryGuardar = mysqli_query($db, "UPDATE departamentos SET Nom_Dep='$nombre_depto' WHERE Cod_Dep='$codigo_depto'") or die(mysqli_error());

                //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se INSERTO
                echo 'Modificado';
            }
            //Si la variable anterior no contiene datos [no encontro registro con el mismo tipo y codigo ingresado]
      
        }
            
    } else {
        header('location: page_denegado.php');
    }
?>