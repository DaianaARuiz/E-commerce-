<?php
require_once "../functions.php";

if(isset($_GET['page'])){ //si la tengo creada la guardo
	$page=$_GET['page'];	
}else{
	$page="listado";
}
include "header.php";
?>
			<section id="page">
				<?php
				CargarPagina($page);
				?>
			</section>