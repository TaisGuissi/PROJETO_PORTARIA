<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/seletor.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main_tabela.css">

</head>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </form>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <div class="topbar-divider d-none d-sm-block"></div>



                <!-- Nav Item - User Information 
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    </a>


                   = Dropdown - User Information 
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>
 -->
        </nav>



        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">ENTRADA E SAÍDA DE VEICÚLOS</h1>
            <p class="mb-4">Relatório de entrada e saída de veicúlos</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="">
                      <!--   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ExemploModalCentralizado"> + ADICIONAR </button> -->
                     <a href="form_entrada_veiculos.php"> <button type="button" class="btn btn-success"> + ADICIONAR </button></a>
                        <button type="button" class="btn btn-danger"> SAÍDA </button>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <!--<th>ID</th> -->
                                    <!--<th>Data</th> -->
                                    <!-- <th>Hora da entrada</th> -->
                                    <th>Placa</th>
                                    <th>motorista</th>
                                    <th>Transportadora</th>
                                    <th>Cliente</th>
                                    <!-- <th>RG</th> -->
                                    <th>Liberação</th>
                                    <th>Tara</th>
                                    <th>Peso Nfs</th>
                                    <th>Peso Balança</th>
                                    <!-- <th>Evidência</th>-->
                                    <!--<th>Nfs Entrada</th>-->
                                    <!-- <th>Situação</th>-->
                                    <!-- <th>Justificativa</th>-->
                                    <th>Aprovação de Saída</th>
                                    <th>Hora de Saída</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <!--    <th>ID</th> -->
                                    <!--<th>Data</th> -->
                                    <!-- <th>Hora da entrada</th> -->
                                    <th>Placa</th>
                                    <th>motorista</th>
                                    <th>Transportadora</th>
                                    <th>Cliente</th>
                                    <!-- <th>RG</th> -->
                                    <th>Liberação</th>
                                    <th>Tara</th>
                                    <th>Peso Nfs</th>
                                    <th>Peso Balança</th>
                                    <!-- <th>Evidência</th>-->
                                    <!--<th>Nfs Entrada</th>-->
                                    <!-- <th>Situação</th>-->
                                    <!-- <th>Justificativa</th>-->
                                    <th>Aprovação de Saída</th>
                                    <th>Hora de Saída</th>
                                    <th>Ações</th>

                                </tr>
                            </tfoot>
                            <tbody>

                                <tr>
                                    <!--    <th>ID</th> -->
                                    <!--<th>Data</th> -->
                                    <!-- <th>Hora da entrada</th> -->
                                    <th>Placa</th>
                                    <th>motorista</th>
                                    <th>Transportadora</th>
                                    <th>Cliente</th>
                                    <!-- <th>RG</th> -->
                                    <th>Liberação</th>
                                    <th>Tara</th>
                                    <th>Peso Nfs</th>
                                    <th>Peso Balança</th>
                                    <!-- <th>Evidência</th>-->
                                    <!--<th>Nfs Entrada</th>-->
                                    <!-- <th>Situação</th>-->
                                    <!-- <th>Justificativa</th>-->
                                    <th>Aprovação de Saída</th>
                                    <th>Hora de Saída</th>
                                    <th>Ações</th>

                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>
                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA9E11</td>
                                    <td>JOSÉ</td>
                                    <td>Autonomo</td>
                                    <td>TEASE</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>MASSAMI</td>
                                    <td>800</td>
                                    <td>850</td>
                                    <td>820</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>08:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA2E11</td>
                                    <td>SAMUEL</td>
                                    <td>Autonomo</td>
                                    <td>GKTB</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>CRISTINA</td>
                                    <td>1300</td>
                                    <td>1250</td>
                                    <td>1200</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>CRISTINA</td>
                                    <td>08:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>


                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>



                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>


                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>

                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>
                                <tr>
                                    <!-- <td>1</td>-->
                                    <!--  <td>25-11-2022</td> -->
                                    <!--  <td>09:50</td> -->
                                    <td>BRA8E11</td>
                                    <td>Pedro</td>
                                    <td>Autonomo</td>
                                    <td>CTRLTECH</td>
                                    <!-- <td>38.488.988-5</td>-->
                                    <td>Massami</td>
                                    <td>1500</td>
                                    <td>500</td>
                                    <td>550</td>
                                    <!-- <td>Foto</td>-->
                                    <!--  <td>264847 - 484578 - 2564884</td>-->
                                    <!--   <td>Situaçao</td>-->
                                    <td>Massami</td>
                                    <td>09:00</td>

                                    <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>

                                <tr>
                                    <<!-- <td>1</td>-->
                                        <!--  <td>25-11-2022</td> -->
                                        <!--  <td>09:50</td> -->
                                        <td>BRA8E11</td>
                                        <td>Pedro</td>
                                        <td>Autonomo</td>
                                        <td>CTRLTECH</td>
                                        <!-- <td>38.488.988-5</td>-->
                                        <td>Massami</td>
                                        <td>1500</td>
                                        <td>500</td>
                                        <td>550</td>
                                        <!-- <td>Foto</td>-->
                                        <!--  <td>264847 - 484578 - 2564884</td>-->
                                        <!--   <td>Situaçao</td>-->
                                        <td>Massami</td>
                                        <td>09:00</td>
                                        <td> <button type="button" class="btn btn-danger">Excluir</button> <button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-success">Liberar</button></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal cadastro 
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">ENTRADA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="login100-form-btn">Registrar entrada</button>
            </div>
        </div>
    </div>
</div>
-->


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>