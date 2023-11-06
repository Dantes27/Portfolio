<?php require_once "controllerUserData.php";?>
<?php
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    if ($email != false && $password != false) {
        $sql = "SELECT * FROM usertable WHERE email = '$email'";
        $run_Sql = mysqli_query($conexion, $sql);
        if ($run_Sql) {
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $status = $fetch_info['status'];
            $code = $fetch_info['code'];
            if ($status == "verified") {
                if ($code != 0) {
                    header('Location: reset-code.php');
                }
            } else {
                header('Location: user-otp.php');
            }
        }
    } else {
        header('Location: login-user.php');
    }
?>
<?php
	EliminarNoticias($_GET['id_noticias']);
	function EliminarNoticias($id_noticias)
	{
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
			include 'conexion.php';
			$sentencia="DELETE FROM noticias WHERE id_noticias='".$id_noticias."' ";
			$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
		}
	}
?>
<script type="text/javascript">
	alert("Eliminado Corectamente!!!");
	window.location.href='noticias-view.php';
</script>