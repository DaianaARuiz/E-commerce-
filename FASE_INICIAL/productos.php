
			<!-- <section id="page"> -->
				<div class="cat-product">
	<div class="w_content">
		<div class="women">
			<a href="#">
				<h4>Categoria #1 - <span>4449 items</span></h4>
			</a>
			<ul class="w_nav">
				<li>Ordernar por: </li>
				<li><a class="active" href="#">Más recientes</a></li> |
				<li><a href="#">Menor precio</li> |
				<li><a href="#">Mayor precio</a></li> 
				<div class="clearfix"></div>	
			</ul>
			<div class="clearfix"></div>	
		</div>
	</div>
	<!-- grids_of_4 -->
	<div class="grid-product">

		<?php
		$archivo="listadoProductos.csv";//guardo el excel
		if($file=fopen($archivo,'r'));//lo abro para lectura
		{
			while(($data = fgetcsv($file,1000,","))!==FALSE)
			{
				// var_dump($data);
				?>
				<div class="product-grid">
					<div class="content_box">
						<a href="producto.php">
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
		?>
		
		<div class="clearfix"></div>
	</div>
</div>
			<!-- </section> -->
			