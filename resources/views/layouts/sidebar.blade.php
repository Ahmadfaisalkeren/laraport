<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CMS Portfolio</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://via.placeholder.com/80" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item active">
                    <a href="{{ route('about.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('skill.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-wave-square"></i>
                        <p>
                            Skills
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('project.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Project
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('certificate.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-stamp"></i>
                        <p>
                            Certificate
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-id-card-alt"></i>
                        <p>
                            Contact
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profil.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Profile Image
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>
