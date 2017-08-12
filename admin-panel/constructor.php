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

    }else {
        header('location: page_denegado.php');
    }
?>