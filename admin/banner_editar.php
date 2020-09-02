<?php
  
include "../config/conexion.php";

session_start();
    if(!$_SESSION["nombre"]){
        header("location: login.php");
    }
  $id = $_GET['id'];
      $sql = "SELECT * FROM banner WHERE banner_id = '$id'";
      $dato = $conexion->query($sql);
      //print_r($dato);
      $fila = mysqli_fetch_assoc($dato);
  //echo "Bienvenido: " .$_SESSION['nombre'];
?>

<?php include "inc/inicio.php";?>
<style>
.mt-40 {   
       margin-top: 40px;
}
.mt-20  { 
     margin-top: 20px;
} 
</style>


         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Banner</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">

                             <main class="page-content scroll">
    <div class="container-fluid">
      <h2>Cargar Nuevo Banner</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/banner_update.php" method="post" enctype="multipart/form-data">
      
      <div class="form group">
          <label class="col-md-12 text-left mt-15" for="banner_descripcion">Descripcion</label>
            <div class="col-md-12">
              <textarea type="text" name="descripcion" class="form-control" id="descripcion" ><?php echo $fila['banner_descripcion']?></textarea>
            </div>
            
      </div>
      <div class="form-group">
        <label for="imagen" class="col-md-3 mt-15">Imagen</label>
        <?php
        if(strlen($fila['banner_imagen'])>0){
          
          echo '<img src="../upload/banner/'.$fila['banner_imagen'].'" width="50%">';
          }
          ?>
        <div class="col-md-12">
          <input type="file" class="form-control"  name="banner_imagen" id="imagen">
          <P>Dimensiones (2000 x 1330px)</P>
        </div>
      </div>
      
      <div class="form-group">
        <label for="banner_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" checked="checked" name="status" id="status"
          <?php if($fila['banner_status'] == 1){ ?> checked="checked" <?php } ?>>
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <input type="hidden"  name="banner_id" value="<?php echo $id?>"> 
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-folder"></i> Guardar</button>
        <a href="banner_listado.php" class="btn btn-primary cerrar">
        <i class="fa fa-reply"></i> Cancelar</a>
      </div>
    </form>
</div>
</div>          
 </div>
</div>
  </main>


   <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>

    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
