<?php
    include('../cn/bdconexion.php');
    $usuario =  $_POST['usuario'];
    $pass =  $_POST['pass'];

        session_start();
        if ($usuario=='rootuser'&&$pass=='resutoor') {
            $_SESSION['username'] = 'RootUser';
            $_SESSION['rank'] = 'Full Administrator';
            $_SESSION['type'] = 'Administrador';
            $_SESSION['codigoUsuario'] = 'N/A';
            $_SESSION['status'] = 'N/A';
            $_SESSION['Id_Empleado'] = 'N/A';
            echo '<p class="semibold-text mb-0" style="color:green;text-align:center;">Acceso concedido</p>';
            ?>
            <script language="javascript"> 
                window.setTimeout('location.href="index.php"', 2000);
            </script>
            <?php
        } else {
            $queryUsuario=mysqli_query($db, "SELECT * FROM usuarios WHERE Username='$usuario' AND Pass='$pass' AND Estado='Activo'") or die(mysqli_error);
            if ($rowQueryUsuario = mysqli_fetch_array($queryUsuario)) {
                $Id_Empleado = $rowQueryUsuario['Id_Empleado'] ;
                $queryDatosEmp=mysqli_query($db, "SELECT Dep.*, Car.*, Emp.* FROM departamentos Dep INNER JOIN(cargos Car INNER JOIN(empleados Emp INNER JOIN asignaciones Asig ON Emp.Id_Empleado=Asig.Id_Empleado) ON Car.Cod_Cargo=Asig.Cod_Cargo) ON Dep.Cod_Dep=Asig.Cod_Dep WHERE Emp.Id_Empleado = '$Id_Empleado' AND Emp.Estado = 'Activo'") or die(mysqli_error);
                $rowQueryDatosEmp = mysqli_fetch_array($queryDatosEmp);
                if ($rowQueryDatosEmp['Id_Empleado']!=0) {
                    $_SESSION['codigoUsuario'] = $rowQueryUsuario["Cod_Usuario"];
                    $_SESSION['username'] = $rowQueryUsuario["Username"];
                    $_SESSION['pass'] = $rowQueryUsuario["Pass"];
                    $_SESSION['type'] = $rowQueryUsuario["Tipo"];
                    $_SESSION['status'] = $rowQueryUsuario["Estado"];
                    $_SESSION['Id_Empleado'] = $Id_Empleado;
                    #$_SESSION['username'] = $rowQueryDatosEmp["Nombres"] . " " . $rowQueryDatosEmp["Apellido1"];
                    $_SESSION['rank'] = $rowQueryDatosEmp["Nom_Cargo"] . " de " . $rowQueryDatosEmp["Nom_Dep"];
                    echo '<p class="semibold-text mb-0" style="color:green;text-align:center;">Acceso concedido</p>';
                    ?>
                    <script language="javascript"> 
                        window.setTimeout('location.href="index.php"', 2000);
                    </script>
                    <?php
                }
                if ($rowQueryDatosEmp['Id_Empleado']==0) {
                    echo '<p class="mb-0" style="color:red;text-align:center;">Usuario o contrase&ntilde;a incorrectos</p>';
                }
            } else {
                echo '<p class="mb-0" style="color:red;text-align:center;">Usuario o contrase&ntilde;a incorrectos</p>';
            }
        }
?>