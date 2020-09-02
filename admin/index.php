<?php
 include "../config/conexion.php";
 if($result = $conexion->query("SELECT COUNT(*) FROM cliente")) {
    

}
?>

<?php include "inc/inicio.php";?>
        <div class="content mt-3">

            <!--<div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>-->


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Ver Detalles</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php print_r($result);?></span>
                        </h4>
                        <p class="text-light">Total De Clientes</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <!--<canvas id="widgetChart1"></canvas>-->
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Ver Detalles</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">15</span>
                        </h4>
                        <p class="text-light">Ganados Mes Pasado</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <!--<canvas id="widgetChart2"></canvas>-->
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Ver Detalles</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">35</span>
                        </h4>
                        <p class="text-light">Ganados en el Año</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Ver Detalles</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10</span>
                        </h4>
                        <p class="text-light">Clientes Inactivos</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

             <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Datos De Todos Los Clientes</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Denominacion</th>
                                            <th>Ruc</th>
                                            <th>Gerente</th>
                                            <th>Couta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr><td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                           <td>Fiweex S.R.L</td>
                                            <td>80088066-8</td>
                                            <td>Esteban Torres</td>
                                            <td>300.000 Gs</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>$112,000</td>
                                        </tr>
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

</body>

</html>
