<?php
ob_start();
if (is_file("view/$page.php")) {
	$peticon = [];
	$titulo = "Login";
	$css = [];

<<<<<<< HEAD
	require_once "model/Usuarios.php";
=======
	require_once "model/usuario.php";
>>>>>>> 94a90e20975da0ddea557651bb6fd414fb19859e

	$user = new Usuario();

	if (!empty($_POST)) {
		$peticion['peticion'] = "sesion";
		$cedula = $_POST['particle'] . $_POST['CI'];
		$pass = $_POST['password'];
		$user->set_cedula($cedula);
		$user->set_clave($pass);
		if ($user->Transaccion($peticion)) {
			require_once "model/empleado.php";
			$peticion['peticion'] = "perfil";
			$emp = new Empleado();


			$emp->set_cedula($cedula);
			$datos = $emp->datos_empleado() + $user->Transaccion($peticion);
			$_SESSION['user'] = $datos;
			$_GET['page'] = "";
			if ($cedula == $pass) {

				ob_clean();
				echo '<script>window.location="?page=users-profile"</script>';
				exit();
			}
			ob_clean();
			echo '<script>window.location="?page=home"</script>';
			exit();
		} else {
			$msg["danger"] = "Usuario y/o contraseña incorrectos";
		}
	}

	if ($page == "login") {
		require_once "view/$page.php";
	}
} else {
	require_once "view/404.php";
}
