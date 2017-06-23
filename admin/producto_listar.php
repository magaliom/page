<? include_once('inc/header.php');?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <? include_once('inc/left_menu.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
         <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de usuarios</h2>
					<div class="clearfix"></div>
                    <a href="usuarios_crear" ><button>Crear</button></a>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table ">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Id </th>
                            <th class="column-title">Producto </th>
                            <th class="column-title">Precio </th>
                            <th class="column-title">Descripcion </th>
                            <th class="column-title no-link last"><span class="nobr">Editar</span>
                            <th class="column-title no-link last"><span class="nobr">Eliminar</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
						<?
							$sql = 'SELECT id_producto, Nombre_de_producto, Precio_de_producto, descripcion
                            FROM productos ORDER BY id_producto ASC';
							$resultado = $con->query($sql);
							foreach($resultado as $row){
								?>
								  <tr class="even pointer"> 
									<td class=" "><? echo $row['id_producto']?></td>
									<td class=" "><?= $row['Nombre_de_producto']?> </td> <!--PRODUCTOS-->
									<td class=" "><? print($row['Precio_de_producto'])?></td> <!--PRECIO DE PRODUCTOS-->
									<td class=" "><? print($row['descripcion'])?></td><!--DESCRIPCION-->

										<td class=" last"><a href="productos_editar.php?id=<?=$row['id_producto']?>">Edit</a>
										<td class=" last"><a href="productos_eliminar.php?id=<?=$row['id_producto']?>">Eliminar</a>
									</td>
								  </tr>
							<?}?>
                         
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
        </div>
        <!-- /page content -->
<? include_once('inc/footer.php');
