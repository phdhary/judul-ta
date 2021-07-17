<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        
        <span class="brand-text font-weight-light center">Web Judul TA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('judulta.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Judul TA
                        </p>
                    </a>
                </li>

                @if (Auth::user()->role == 1)

                    <li class="nav-item">
                        <a href="{{ route('kategori.index') }}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Kategori
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ Auth::user()->role==1 ? route('admin.profile') : route('user.profile') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
