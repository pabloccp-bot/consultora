<?php include "inc/inicio.php";?>
<style>
.mt-40 {   
       margin-top: 40px;
}
.mt30  { 
     margin-top: 10px;
} 
</style>


         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Agregar Nuevo Cliente</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <form action="ajax/clientes_guarda.php" method="post" enctype="multipart/form-data">
                                  <div class="form group">
                                    <label class="col-md-12 text-left mt30" for="libro_titulo">Razón Social</label>
                                      <div class="col-md-12">
                                        <input type="text" name="razon_social" required="required" class="form-control" id="razon_social" ></input>
                                      </div>
                                  </div>
                                  <div class="form group">
                                    <label class="col-md-12 text-left mt30" for="libro_titulo">Ruc</label>
                                      <div class="col-md-12">
                                        <input type="text" name="ruc" required="required" class="form-control" id="ruc" ></input>
                                      </div>
                                  </div>

                                  <div class="form group">
                                    <label class="col-md-12 text-left mt30" for="libro_titulo">Nombre Propietario</label>
                                      <div class="col-md-12">
                                        <input type="text" name="nombre_propietario" class="form-control" id="nombre_propietario" ></input>
                                      </div>
                                  </div>
                                  <div class="form group">
                                    <label class="col-md-12 text-left mt30" for="libro_titulo">Apellido Propietario</label>
                                      <div class="col-md-12">
                                        <input type="text" name="apellido_propietario" class="form-control" id="apellido_propietario" ></input>
                                      </div>
                                  </div>

                                  <div class="form group">
                                    <label class="col-md-12 text-left mt30" for="libro_titulo">Email Propietario</label>
                                      <div class="col-md-12">
                                        <input type="email" name="email_propietario" class="form-control" id="email_prpietario" ></input>
                                      </div>
                                  </div>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="libro_imagen" class="col-md-3 mt30">Telefono Propietario</label>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" required="required" name="telefono_propietario" id="telefono_propietario">
                                    </div>
                                  </div>
                                  <div class="form group">
                                    <label class="col-md-12 text-left mt30" for="libro_pagina">Dirección</label>
                                      <div class="col-md-12">
                                        <input type="text" name="direccion" class="form-control" id="direccion" ></input>
                                      </div>
                                  </div>

                                  <div class="form group">
                                    <label class="col-md-12 text-left mt30" for="libro_pagina">Cuota</label>
                                      <div class="col-md-12">
                                        <input type="text" name="cuota" class="form-control" id="couta" ></input>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="cliente_status" class="col-md-3 mt30">Activo</label>
                                    <div class="col-md-12">
                                      <input type="checkbox" value="1" checked="checked" name="cliente_status" id="cliente_status">
                                    </div>
                                  </div>
                                  <div class="form-group pull-left col-xs-12 mt-40">
                                    <button type="submit" class="btn btn-primary">
                                      <i class="fa fa-folder"></i> Guardar</button>
                                    <a href="clientes_listado.php" class="btn btn-primary cerrar">
                                    <i class="fa fa-reply"></i> Cancelar</a>
                                  </div>
                            </form>
                                    
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


        </div> <!-- .content -->
    <!-- /#right-panel -->

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
