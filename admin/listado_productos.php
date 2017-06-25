<?php include_once('inc/header.php');?>
<?
 $sql = 'SELECT * FROM productos';
 $resultado = $con->query($sql);
 ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <?php include_once('inc/left_menu.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
         <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de productos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" >

                <div class="row">
                 <?php foreach($resultado as $row){  ?>
                  <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="..." alt="...">
                     <div class="caption">
                    <h3><?php echo $row['Nombre_de_producto']?></h3>
                <p><?php echo $row['descripcion']?></p>
                <a href=""> Ver mas</a>
              </div>
            </div>
          </div>
           
        </div>
        <?}?>
        </div> 
                  
        <!-- /page content -->
<?php include_once('inc/footer.php');

