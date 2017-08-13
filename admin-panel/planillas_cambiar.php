<?php
    session_start();
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
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Cod_Planilla='$codigo'") or die(mysqli_error());

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
            $queryVerificarTipoYCodigoRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Cod_Planilla='$codigo' AND Tipo='$tipo'") or die(mysqli_error());

            //Variable que guarda los datos obtenidos
            $rowExisteTipoYCodigo=mysqli_fetch_array($queryVerificarTipoYCodigoRepetido); 

            //Si la variable anterior contiene datos [ya lo encontro]
            if ($rowExisteTipoYCodigo['Existe']!=0) {
                // Guardar el resultado del CAMBIO en todos los campos menos el de tipo (que no se modifico)
                $queryGuardar = mysqli_query($db, "UPDATE planillas SET Descripcion='$desc', Sueldo_Base='$sueldoBase', Ded_IHSS='$deducIHSS', Ded_Especiales='$deducEsp', Salario_Neto='$sueldoNeto' WHERE Cod_Planilla='$codigo' AND Tipo='$tipo'") or die(mysqli_error());

                //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se INSERTO
                echo 'Modificado';
            }
            //Si la variable anterior no contiene datos [no encontro registro con el mismo tipo y codigo ingresado]
            if ($rowExisteTipoYCodigo['Existe']==0) {
                //Que verifique si existe otro registro con el mismo tipo
                //Porque solo se permite una planilla por cargo

                // Guardar la consulta para saber si existe un registro del mismo tipo
                $queryVerificarTipoRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM planillas WHERE Tipo='$tipo'") or die(mysqli_error());

                //Variable que guarda los datos obtenidos
                $rowExisteTipo=mysqli_fetch_array($queryVerificarTipoRepetido); 

                //Si la variable anterior no contiene datos [no encontro registro con el mismo tipo ingresado]
                if ($rowExisteTipo['Existe']==0) {
                    // Guardar el resultado del CAMBIO en todos los campos
                    $queryGuardar = mysqli_query($db, "UPDATE planillas SET Descripcion='$desc', Tipo='$tipo', Sueldo_Base='$sueldoBase', Ded_IHSS='$deducIHSS', Ded_Especiales='$deducEsp', Salario_Neto='$sueldoNeto' WHERE Cod_Planilla='$codigo'") or die(mysqli_error());

                    //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se MODIFICO
                    echo 'Guardado';
                }
                //Si la variable anterior contiene datos [si encontro registro con el mismo tipo ingresado]
                if ($rowExisteTipo['Existe']!=0) {
                    //No imprimir nada, para que el metodo .ajax(); de jQuery Funcione y sepa que NO se MODIFICO 
                    // porque hubo error de que ya existe del mismo tipo
                    #echo 'Error';
                }
            }
        }
            
    } else {
        header('location: page_denegado.php');
    }
?>