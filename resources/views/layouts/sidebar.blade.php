<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">CIS AUPS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sms"></i>
                        <p>
                            SMS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('agent.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Agents
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('groupe.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Groupes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('grade.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-medal"></i>
                        <p>
                            Grade
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-secret"></i>
                        <p>
                            Utilisateurs
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
