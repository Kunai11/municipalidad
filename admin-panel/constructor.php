<?php
    include('menus.php');
    

    #session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) { 
        
        function menu(){
            if ($_SESSION['type']=='Administrador') {
                menuAdministrador();
            }
            if ($_SESSION['type']=='Estandar') {
                menuEstandar();
            }
        }

        function widgets(){
            if ($_SESSION['type']=='Administrador') {
                ?>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget-small warning coloured-icon"><i class="icon fa fa-share fa-3x"></i>
                            <div class="info">
                                <h4>Asignados</h4>
                                <?php
                                include('../cn/bdconexion.php');
                                $queryContarAsig=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM asignaciones") or die(mysqli_error);
                                $rowContarAsig = mysqli_fetch_array($queryContarAsig);
                                echo '
                                    <p><b>'.$rowContarAsig['Cantidad'].'</b></p>
                                ';
                                ?>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-small fashion coloured-icon"><i class="icon fa fa-wpforms fa-3x"></i>
                            <div class="info">
                                <h4>Planillas</h4>
                                <?php
                                $queryContarPlanillas=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM planillas") or die(mysqli_error);
                                $rowContarPlanillas = mysqli_fetch_array($queryContarPlanillas);
                                echo '
                                    <p><b>'.$rowContarPlanillas['Cantidad'].'</b></p>
                                ';
                                ?>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-small danger coloured-icon"><i class="icon fa fa-group fa-3x"></i>
                            <div class="info">
                                <h4>Empleados Inactivos</h4>
                                <?php
                                $queryContarEmpInactivos=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM empleados WHERE Estado='Inactivo'") or die(mysqli_error);
                                $rowContarEmpInactivos = mysqli_fetch_array($queryContarEmpInactivos);
                                echo '
                                    <p><b>'.$rowContarEmpInactivos['Cantidad'].'</b></p>
                                ';
                                ?>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-small danger coloured-icon"><i class="icon fa fa-user-circle fa-3x"></i>
                            <div class="info">
                                <h4>Usuarios Inactivos</h4>
                                <?php
                                $queryContarUsuariosInactivos=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM usuarios WHERE Estado='Inactivo'") or die(mysqli_error);
                                $rowContarUsuariosInactivos = mysqli_fetch_array($queryContarUsuariosInactivos);
                                echo '
                                    <p><b>'.$rowContarUsuariosInactivos['Cantidad'].'</b></p>
                                ';
                                ?>
                            </div>
                            </div>
                        </div>
                        </div>
                <?php
            }

        }

    }else {
        header('location: page_denegado.php');
    }
?>