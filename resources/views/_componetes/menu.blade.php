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
        <a class="nav-link" href="{{ route('home') }}">
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
        <a class="nav-link" href="{{ route('cliente.index') }}">
            <i class="fas fa-users"></i>
            <span>Cliente</span>
        </a>
    </li>
    <li class="nav-item active hover1">
        <a class="nav-link" href="{{ route('posto.index') }}">
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
    <!-- configuração -->
    <div class="sidebar-heading">
        configuração
    </div>
    <li class="nav-item active hover1">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-users"></i>
            <span>Usuarios</span>
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