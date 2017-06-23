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
						<h2>Eliminar Producto ID:<?=$_GET['id']?></h2>
				  <?}else{?>
						<h2>Eliminar producto</h2>

				  <?}?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >
                         Producto: <?=isset($resultado['Nombre_de_producto'])?$resultado['Nombre_de_producto']:'';?> <span class="required"></span>
                        </label>
                      </div>
                    
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >
                    Precio: <?=isset($resultado['Precio_de_producto'])?$resultado['Precio_de_producto']:'';?> <span class="required"></span>
                    </label>
                      </div>
                      
                    <div class="col-md-12 col-sm-12 col-xs-12">  
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >
                    Descripcion: <?=isset($resultado['descripcion'])?$resultado['descripcion']:'';?> <span class="required"></span>
                    </label>
                    </div>
 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<!--cancelo la edición o creación y vuelvo al listado -->
                          <button onclick="javascript:window.location.href='usuarios_listar.php'" class="btn btn-primary" type="button">Volver atras</button>
                          <button type="submit" class="btn btn-success" onclick="window.location='/page/admin/producto_listar.php';">Eliminar producto</button>
                        </div>
                      </div>
						<?if(!empty($_GET['id'])){?>
							<!--Si quiero editar debo saber que usuario quiero editar y uso la primary key -->

							<input type="hidden" name="id" value="<?=$_GET['id']?>">							
						<?}?>
                    
                  </div>
                </div>
              </div>
            </div>

            
        </div>
       <?
            $id = $_GET['id'];
           
        $sql = "DELETE FROM productos WHERE id_producto = '$id'";
            
			$con->exec($sql);
            ?>
      
<? include_once('inc/footer.php');
