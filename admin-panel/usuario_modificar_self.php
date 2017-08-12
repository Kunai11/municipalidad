<?php
    #session_start();
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        include('../cn/bdconexion.php');
        $codigoUser = $_SESSION['codigoUsuario'];
        $userName = $_POST['userName'];
        $oldPass = $_POST['oldPass'];
        $newPass = $_POST['newPass'];

        if ($oldPass===$_SESSION['pass']) {
             $queryCambiarUser = mysqli_query($db, "UPDATE usuarios SET Username='$userName', Pass='$newPass' WHERE Cod_Usuario='".$_SESSION['codigoUsuario']."'") or die(mysqli_error());
             header('location: page-login.php');
        } else {
            ?>
                <script type="text/javascript">
                    javascript:window.history.back();
                </script>
            <?php
    } else {
        header('location: page_denegado.php');
    }
?>