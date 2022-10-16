<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-info">
    <!-- TODO add active page hightligh if the current page is users hightlight the uses list link in blue...-->
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- logout button -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link logout" href="#" role="button" data-toggle="tooltip" data-placement="bottom"
                title="Déconnecter">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
    <!-- logout  Bootstrap Tooltip  -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!-- ./ logout  Bootstrap Tooltip  -->
    <!-- logout button -->

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <!-- Brand Logo-->
    <a href="#" class="brand-link">
        <img src="img/appointments1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="max-height: 38px;opacity: .8">
        <span class="brand-text font-weight-light"><b>Clinique</b>Tlemcen</p></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=" nav-icon fas fa-user-md"></i>
                        <p>
                            Nom Médecin Or Secrétaire
                        </p>
                    </a>
                <li class="nav-item">
                    <a methode="post" href="/patientsList" class="nav-link">
                        <i class=" nav-icon fas fa-plus-circle"></i>
                        <p>
                            Listes des patients
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class=" nav-icon fas fa-stethoscope"></i>
                        <p>Rendez-vous
                        </p>
                    </a>
                </li>
                <!-- FIXME:if admin  AUTHORISATION -->
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>users list</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
<!-- /.sidebar -->
