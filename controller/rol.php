<?php
if (!$_SESSION) {
	echo '<script>window.location="?page=login"</script>';
	$msg["danger"] = "Sesion Finalizada.";
}

ob_start();
if (is_file("view/" . $page . ".php")) {
	require_once "controller/utileria.php";
	require_once "model/permiso.php";
	require_once "model/rol.php";


	$titulo = "Gestionar Roles y Permisos";
	$cabecera = array('#', "Nombre", "Permisos");

	$rol = new Rol();

	if (isset($_POST["entrada"])) {
		$json['resultado'] = "entrada";
		echo json_encode($json);
		$msg = "(" . $_SESSION['user']['nombre_usuario'] . "), Ingresó al Módulo de Roles y Permisos";
		
		Bitacora($msg, "Rol y Permiso");
		exit;
	}

	if (isset($_POST['consultar'])) {
		$peticion["peticion"] = "consultar";
		$datos = $rol->Transaccion($peticion);
		echo json_encode($datos);
		exit;
	}


	if (isset($_POST["modificar"])) {
		$rol->set_codigo($_POST["id_marca"]);
		$rol->set_nombre($_POST["nombre"]);
		$peticion["peticion"] = "actualizar";
		$datos = $rol->Transaccion($peticion);
		echo json_encode($datos);

		if($datos['estado'] == 1){
			$msg = "(" . $_SESSION['user']['nombre_usuario'] . "), Se modificó el registro del rol";
		} else {
			$msg = "(" . $_SESSION['user']['nombre_usuario'] . "), error al modificar rol";
		}
		Bitacora($msg, "Rol y Permiso");
		exit;
	}

	if (isset($_POST["eliminar"])) {
		$rol->set_codigo($_POST["id_marca"]);
		$peticion["peticion"] = "eliminar";
		$datos = $rol->Transaccion($peticion);
		echo json_encode($datos);

		if($datos['estado'] == 1){
			$msg = "(" . $_SESSION['user']['nombre_usuario'] . "), Se eliminó un rol";
		} else {
			$msg = "(" . $_SESSION['user']['nombre_usuario'] . "), error al eliminar un rol";
		}
		Bitacora($msg, "Rol y Permiso");
		exit;
	}

	if (isset($_POST["reporte"])) {

	}

	require_once "view/" . $page . ".php";
} else {
	require_once "view/404.php";
}
