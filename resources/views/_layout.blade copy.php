<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!--cor -->
    <link href="css/cor.css" rel="stylesheet">
    <title>Titulo pagina</title>
</head>

<body id="page-top">

    <div id="wrapper">
        <!--Menu lateral-->
        <ul class="navbar-nav bg_verde sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- simbulo -->
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <!-- logo -->
                <div class="sidebar-brand-text mx-3">Horacio <sup>2</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active dash1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Linha -->
            <hr class="sidebar-divider">
            <!-- Título -->
            <div class="sidebar-heading">
                Cadastrar
            </div>
            <!-- Links -->
            <li class="nav-item active hover1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-users"></i>
                    <span>Cliente</span>
                </a>
            </li>
            <li class="nav-item active hover1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-gas-pump"></i>
                    <span>Posto</span>
                </a>
            </li>
            <li class="nav-item active hover1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-layer-group"></i>
                    <span>Grupo</span>
                </a>
            </li>
            <li class="nav-item active hover1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-clock"></i>
                    <span>Turno</span>
                </a>
            </li>
            <!-- Título -->
            <div class="sidebar-heading">
                Entregas
            </div>
            <li class="nav-item active hover1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-truck"></i>
                    <span>Ida</span>
                </a>
            </li>
            <li class="nav-item active hover1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-arrow-circle-left"></i>
                    <span>Volta</span>
                </a>
            </li>
            <!-- Título -->
            <div class="sidebar-heading">
                Relatório
            </div>
            <li class="nav-item active hover1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-file-alt"></i>
                    <span>Relatório de entrega</span>
                </a>
            </li>


            <!-- linha -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- botao fechar menu -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!--fim menu lateral-->

        <!--parte direita-->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- CONTEUDO OU PARTE QUE SERA ATUALIZADA PELO LINK -->
            <div id="content">
                <!-- menu superior -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- simbolo e botao amburguer -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <!-- fim simbolo e botao amburguer -->


                    <ul class="navbar-nav ml-auto">
                        <!--mensagem-->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                        <!--fim mensagem-->
                        <!--linha-->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- botao perfil -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <!-- fim botao perfil -->
                    </ul>
                </nav>
                <!-- fim menu superior -->

                <!-- CONTEUDO -->
                <div class="container-fluid">
                    <!-- titulo da viw -->
                    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
                    <!-- fim titulo da viw -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- cadastrar -->
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#formCadastrarModal">Adicionar +</button>
                            <!-- cadastrar -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>opções</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>
                                                <a href="#" class="color-white bg-danger p-1 no-hover">deletar</a>
                                                <a href="#" class="color-white bg-primary p-1 no-hover" data-toggle="modal"
                                                data-target="#formEditarModal">editar</a>
                                            </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <th>
                                                <a href="#" class="color-white bg-danger p-1 no-hover">deletar</a>
                                                <a href="#" class="color-white bg-primary p-1 no-hover" data-toggle="modal"
                                                data-target="#formEditarModal">editar</a>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <th>
                                                <a href="#" class="color-white bg-danger p-1 no-hover">deletar</a>
                                                <a href="#" class="color-white bg-primary p-1 no-hover" data-toggle="modal"
                                                data-target="#formEditarModal">editar</a>
                                            </th>
                                        </tr>
                                        <div class="modal fade" id="formEditarModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-success">
                                                        <!--Título-->
                                                        <h5 class="modal-title " id="exampleModalLabel">Editar de Cliente</h5>
                                                        <!--Fim Título-->
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true" class="color-white">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="formCadastrarCliente" method="POST"
                                                            action="/cadastrar-cliente">
                                                            <!-- Nome -->
                                                            <div class="form-group">
                                                                <label for="nome">Nome</label>
                                                                <input type="text" class="form-control" id="nome"
                                                                    name="nome" required>
                                                            </div>
                                                            <!-- Email -->
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" required>
                                                            </div>
                                                            <!-- Telefone -->
                                                            <div class="form-group">
                                                                <label for="telefone">Telefone</label>
                                                                <input type="text" class="form-control" id="telefone"
                                                                    name="telefone" required>
                                                            </div>
                                                            <!-- Endereço -->
                                                            <div class="form-group">
                                                                <label for="endereco">Endereço</label>
                                                                <input type="text" class="form-control" id="endereco"
                                                                    name="endereco" required>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" form="formCadastrarCliente"
                                                            class="btn btn-success">Atualizar</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIM DO CONTEUDO-->
            </div>
            <!-- FIM CONTEUDO OU PARTE QUE SERA ATUALIZADA PELO LINK -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>montado por &copy; Horacio Manuel Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- fim parte direita-->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!--Modal-->
    <div class="modal fade" id="formCadastrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <!--Título-->
                    <h5 class="modal-title " id="exampleModalLabel">Cadastro de Cliente</h5>
                    <!--Fim Título-->
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="color-white">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formCadastrarCliente" method="POST" action="/cadastrar-cliente">
                        <!-- Nome -->
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Telefone -->
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <!-- Endereço -->
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" form="formCadastrarCliente" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="formCadastrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Cliente</h5>
                    
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div> -->

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