<? include_once('inc/header.php');?>
<?
 $sql = 'SELECT * FROM productos';
 $resultado = $con->query($sql);
 
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
                  
                  <div class="x_content">
                    <br />
                    <?
                    if(empty($_GET['id'])){
			         echo 'Not FOUND !!!!';
                    }else{
		                $sql = 'SELECT * FROM productos WHERE id_producto = '.$_GET['id'];
		                $resultado = $con->query($sql)->fetch();
                        ?>
                          
                            <div class="text-center">
                                <h3><? echo $resultado['Nombre_de_producto']?></h3>
                           </div> 
                           
                           <div class="row">
                                <div class="">
                                    <img src="<?$resultado['imagen_de_producto']?>" alt="" border="0" />
                                </div> 
                            </div>   
                            
                            <div class="row">
                                <div class="text-center">
                                    <p><? echo $resultado['descripcion']?></p> 
                                </div> 
                            </div>  
                            <div class="text-center">
                                <button onclick="javascript:window.location.href='listado_productos.php'" type="button" class="btn btn-primary"> Comprar 
                                </button>
                            </div>
                       <?}?>
                              <div class="text-right alinear">
                                  <button onclick="javascript:window.location.href='listado_productos.php'" type="button" class="btn btn-primary"> Atras
                                  </button>      
                              </div>
                  </div>
                </div>
              </div>
            </div>
        
            
        </div>
        <!-- /page content -->
        
        <?
        $id_producto = $_GET['id'];    
        $id_usuario = $_SESSION['usuario']['id'];
            
           
            
         $insertSql = "INSERT INTO compras (id_producto,usuario_id)
					VALUES ('$id_producto','$id_usuario')";    
            
			$con->exec($insertSql);
        ?>
       
<style type="text/css"> 
.alinear { 
margin-right: 25%;
    } 
</style> 
        
<? include_once('inc/footer.php');


