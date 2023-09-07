<script src="<?php echo $this->raiz; ?>/resources/assets/js/inactivity.js"></script>
<script src="<?php echo $this->raiz; ?>/resources/assets/js/MainSidebar.js"></script>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-warning elevation-1">
    <!-- Brand Logo -->
    <a class="brand-link">
        <img src="<?php echo $this->raiz; ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Cuadratura</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                    <a id="Dash" href="<?php echo $this->raiz; ?>/Home/dashboard" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                            <!-- <span class="right badge badge-secondary">soon</span> -->
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-closed">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Count Cargas
                            <span class="right badge badge-warning">Develop<i class="right fas fa-angle-left"></i></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $this->raiz; ?>/loads/show" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>C. Refresco</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>C. Plataformas</p>
                            </a>
                        </li>
                    </ul>          
                </li>

                <li class="nav-item">
                    <a id="Dash" href="<?php echo $this->raiz; ?>/logs" class="nav-link">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Logs cargas
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a id="Dash" href="<?php //echo $this->raiz; ?>/Tables/Boxes" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Caja
                            <span class="right badge badge-warning">Develop</span>
                        </p>
                    </a>
                </li> -->

                <!-- <li class="nav-item menu-closed">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Logs procedures
                            <span class="right badge badge-secondary">soon<i class="right fas fa-angle-left"></i></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cargas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Correcciones</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="nav-item">
                    <a id="ShowUsers" href="<?php //echo $this->raiz; ?>/users/show" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                            <span class="right badge badge-danger">new</span>
                        </p>
                    </a>
                </li> -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>