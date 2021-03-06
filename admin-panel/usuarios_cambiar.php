<?php
    session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        // Incluir el codigo de la conexion
        include('../cn/bdconexion.php');

        // Recuperar los datos enviados a traves del metodo POST
        $codigo = $_POST['codigo_usuario'];
        $nombre = $_POST['nombre_usuario'];
        $pass = $_POST['pass'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $Id_Empleado = $_POST['Id_Empleado'];

        // Variable que guarda el resultado de la consulta, para saber si existe
        $queryVerificar = mysqli_query($db, "SELECT COUNT(*) as Existe FROM usuarios WHERE Cod_Usuario='$codigo'") or die(mysqli_error());
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
            $queryVerificarCodigoYUsuarioRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM usuarios WHERE Cod_Usuario='$codigo' AND Id_Empleado='$Id_Empleado'") or die(mysqli_error());

            //Variable que guarda los datos obtenidos
            $rowExisteCodigoYUsuario=mysqli_fetch_array($queryVerificarCodigoYUsuarioRepetido); 

            //Si la variable anterior contiene datos [ya lo encontro]
            if ($rowExisteCodigoYUsuario['Existe']!=0) {
                // Guardar el resultado del CAMBIO en todos los campos menos el de tipo (que no se modifico)
                $queryGuardar = mysqli_query($db, "UPDATE usuarios SET Username='$nombre', Pass='$pass', Tipo='$tipo', Estado='$estado' WHERE Cod_Usuario='$codigo' AND Id_Empleado='$Id_Empleado'") or die(mysqli_error());

                //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se INSERTO
                echo 'Modificado';
            }
            //Si la variable anterior no contiene datos [no encontro registro con el mismo tipo y codigo ingresado]
            if ($rowExisteCodigoYUsuario['Existe']==0) {
                //Que verifique si existe otro registro con el mismo tipo
                //Porque solo se permite una planilla por cargo

                // Guardar la consulta para saber si existe un registro del mismo tipo
                $queryVerificarEmpRepetido = mysqli_query($db, "SELECT COUNT(*) as Existe FROM usuarios WHERE Id_Empleado='$Id_Empleado'") or die(mysqli_error());

                //Variable que guarda los datos obtenidos
                $rowExisteEmp=mysqli_fetch_array($queryVerificarEmpRepetido); 

                //Si la variable anterior no contiene datos [no encontro registro con el mismo tipo ingresado]
                if ($rowExisteEmp['Existe']==0) {
                    // Guardar el resultado del CAMBIO en todos los campos
                    $queryGuardar = mysqli_query($db, "UPDATE usuarios SET Username='$nombre', Pass='$pass', Tipo='$tipo', Estado='$estado', Id_Empleado='$Id_Empleado' WHERE Cod_Usuario='$codigo'") or die(mysqli_error());

                    //Imprimir algo, para que el metodo .ajax(); de jQuery Funcione y sepa que YA se MODIFICO
                    echo 'Guardado';
                    
                }
                //Si la variable anterior contiene datos [si encontro registro con el mismo tipo ingresado]
                if ($rowExisteEmp['Existe']!=0) {
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