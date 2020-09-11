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

	function CargarPagina($page)
	{
		$page=$page.".php";
		if(file_exists($page))
		{
		 	include $page;
		}else
		{
			include "404.php";
		}
	}

	function mostrarProductos()
	{
		$archivo="listadoProductos.csv";//guardo el excel
		if($file=fopen($archivo,'r'));//lo abro para lectura
		{
			while(($data = fgetcsv($file,1000,","))!==FALSE)
			{
				// var_dump($data);
				?>
				<div class="product-grid">
					<div class="content_box">
						<a href="./?page=producto">
							<div class="left-grid-view grid-view-left">
								<img src="images/productos/<?php echo $data[0];?>.jpg" class="img-responsive watch-right" alt=""/>
							</div>
						</a>
					<h4><a href="#"><?php echo $data[1]; ?></a></h4>
					<p><?php echo $data[5]; ?></p>
					<span><?php echo $data[2]; ?></span>
				</div>
			</div>
			<?php
			}
			fclose($file);
		}
	}
?>