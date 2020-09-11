<?php
	function mostrarMensajes($rta){
		switch($rta)
		{
			case "0x001":
				$mensaje="<span style=color:red>Nombre invalido</span>";
				break;
			case "0x002":
				$mensaje="<span style=color:red>Email invalido</span>";
				break;
			case "0x003":
				$mensaje="<span style=color:red>Mensaje Invalido</span>";
				break;
			case "0x004":
				$mensaje="<span style=color:green>Email enviado</span>";
				break;
			case "0x005":
				$mensaje="<span style=color:red>Email no enviado</span>";
				break;


			return $mensaje;

		}
	}

	function CargarPagina($page){
		include $page.".php";
	}
?>