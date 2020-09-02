<?php   
    session_start();
    if(!$_SESSION["nombre"]){
        header("location: login.php");
    }

include "../config/conexion.php";
  $sql = "SELECT * FROM banner ORDER BY banner_id DESC";
  $lista = $conexion->query($sql);
if(isset($_GET['id'])){
      $id= $_GET['id'];
      $sql = "DELETE FROM banner WHERE banner_id = $id";
      $conexion->query($sql);
      header("location: banner_listado.php");
    }
 ?>

<?php include "inc/inicio.php";?>


 
         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                     <div class="col-md-12 form-group">
                                <a href="banner_nuevo.php" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Nuevo</a>
                            </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Listado de Banners</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Banner Descripción</th>
                                            <th>Banner Imagen</th>
                                            <th>Banner Estado</th>
                                            <th>Fecha</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($fila = mysqli_fetch_assoc($lista)){ ?>
                                        <tr>
                                            <td><?php echo $fila["banner_id"];?></td>
                                            <td><?php echo $fila["banner_descripcion"];?></td>
                                             <td>
                                            <img  height="80" src="../upload/banner/<?php echo $fila["banner_imagen"];?>">
                                            </td>
                                            <?php if($fila['banner_status'] == 1){ ?>
                                            <td><span class="label label-info"><?php  $fila["banner_status"];?>Activo</span></td>
                                            <?php }else{ ?>
                                            <td><span class="label label-warning"><?php  $fila["banner_status"];?>Inactivo</span></td>
                                            <?php } ?>
                                            <td><?php echo date("d/m/Y H:i:s", strtotime($fila["banner_timestamp"]));
                                             ?></td>
                                            <td>
                                            <a href="banner_editar.php?id=<?php echo $fila["banner_id"];?>">
                                                <button class="btn btn-success bt"><i class="fa fa-edit"></i> Editar
                                                </button></a>
                                            
                                            <a href="" onclick="eliminar('<?php echo $fila["banner_id"];?>');return!1">
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button></a>
                                          </td>
                                        </tr>
                                         <?php } ?>
                                    </tbody>
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
        function eliminar(valor) {
  if(confirm("esta seguro que desea borrar el Banner")){
    location.href = "?id="+valor;
  }
}
    </script>


</body>

</html>
