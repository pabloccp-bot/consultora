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
                                <strong class="card-title">Team</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">

                             <main class="page-content scroll">
    <div class="container-fluid">
      <h2>Cargar Nuevo Team</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/guarda_banner.php" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="banner_titulo">Nombre y Apellido</label>
          <div class="col-md-12">
            <input type="text" name="banner_titulo" class="form-control" id="banner_titulo" ></input>
          </div>
      </div>
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="banner_titulo">Cargo</label>
          <div class="col-md-12">
            <input type="text" name="banner_titulo" class="form-control" id="banner_titulo" ></input>
          </div>
      </div>

      <div class="form group">
          <label class="col-md-12 text-left mt-15" for="banner_descripcion">Descripcion</label>
            <div class="col-md-12">
              <textarea type="text" name="banner_descripcion" class="form-control" id="banner_descripcion" ></textarea>
            </div>
            
      </div>
      <div class="form-group">
        <label for="banner_imagen" class="col-md-3 mt-15">Foto</label>
        <div class="col-md-12">
          <input type="file" class="form-control" required="required" name="banner_imagen" id="banner_imagen">
          <P>Dimensiones (1900 x 1083px)</P>
        </div>
      </div>
      
      <div class="form-group">
        <label for="banner_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" checked="checked" name="banner_status" id="banner_status">
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-folder"></i> Guardar</button>
        <a href="bienvenida2.php" class="btn btn-primary cerrar">
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
