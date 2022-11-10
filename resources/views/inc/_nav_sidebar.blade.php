<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-info">
    <!-- TODO add active page hightligh if the current page is users hightlight the uses list link in blue...-->
    <!-- TODO add insert btn on hover on patient/user list ifthey are being hoverd -->
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- logout button -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link logout" href="{{ route('logout') }}" role="button" title="logout">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>


</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <!-- Brand Logo-->
    <a href="#" class="brand-link">
        <img src="{{ asset('img/appointments1.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
                            {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                        </p>
                    </a>
                </li>
                {{-- hide for secretary --}}
                @if (Auth::user()->role->value != \App\Enums\UserRoles::SECRETARY->value)
                    <li class="nav-item">
                        <a href="{{ route('patients.index') }}" class="nav-link">
                            <i class=" nav-icon fas fa-plus-circle"></i>
                            <p>
                                Patients List
                            </p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="{{ route('appointment.index') }}" class="nav-link">
                        <i class=" nav-icon fas fa-stethoscope"></i>
                        <p>Appointment list
                        </p>
                    </a>
                </li>
                {{-- display only for admin --}}
                @if (Auth::user()->role->value == \App\Enums\UserRoles::ADMIN->value)
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users list</p>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
<!-- /.sidebar -->
