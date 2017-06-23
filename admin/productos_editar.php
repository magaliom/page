<? include_once('inc/header.php');?>
<?
	
	if(!empty($_GET['id'])){
		/*
			SI recibo el id significa que quiero editar un usuario por lo tanto consulto sus datos
		*/
		$sql = 'SELECT * FROM productos WHERE id_producto = '.$_GET['id'];
		$resultado = $con->query($sql)->fetch();
		
	}

?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <? include_once('inc/left_menu.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
				  <?if(!empty($_GET['id'])){
					  /*cambio el texto dependiendo si quiero editar o agregar */?>
						<h2>Editar Usuario ID:<?=$_GET['id']?></h2>
				  <?}else{?>
						<h2>Crear Usuario</h2>

				  <?}?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2"  method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Producto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<!--Si quiero editar debo mostrar los datos del usuario y sino vacio -->
                          <input type="text" id="producto" name="producto" value="<?=isset($resultado['Nombre_de_producto'])?$resultado['Nombre_de_producto']:'';?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Precio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<!--Si quiero editar debo mostrar los datos del usuario y sino vacio -->
                          <input type="text" id="precio" name="precio" value="<?=isset($resultado['Precio_de_producto'])?$resultado['Precio_de_producto']:'';?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<!--Si quiero editar debo mostrar los datos del usuario y sino vacio -->
                          <input type="text" id="descripcion" name="descripcion" value="<?=isset($resultado['descripcion'])?$resultado['descripcion']:'';?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Imagen <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="imagen" name="imagen"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<!--cancelo la edición o creación y vuelvo al listado -->
                          <button class="btn btn-primary" type="button">Volver atras</button>
                          <button onclick="window.location='/page/admin/producto_listar.php';" type="submit" class="btn btn-success">Guardar edicion</button>
                        </div>
                      </div>
						<?if(!empty($_GET['id'])){?>
							<!--Si quiero editar debo saber que usuario quiero editar y uso la primary key -->

							<input type="hidden" name="id" value="<?=$_GET['id']?>">							
						<?}?>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            
        </div>
        <!-- /page content -->
        <?
        $sql = "UPDATE productos SET
						Nombre_de_producto='".$_POST['producto']."', 
                        Precio_de_producto='".$_POST['precio']."',
                        imagen_de_producto='".$_POST['imagen']."', 
						descripcion='".$_POST['descripcion']."'";
			
			$sql.= ' WHERE id_producto = '.$_POST['id'];
			$con->exec($sql);    
        ?>
<? include_once('inc/footer.php');
