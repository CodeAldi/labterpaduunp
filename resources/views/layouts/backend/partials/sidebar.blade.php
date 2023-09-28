<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Laboratorium Terpadu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                {{-- <li class="nav-header">Atur Berita, gallery, dan dokumen</li> --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.home') }}" class="nav-link {{ Request::routeIs('admin.dashboard.home')? 'active': '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>

                </li>
                <li class="nav-item {{ Request::routeIs('admin.dashboard.berita.*')? 'menu-open': '' }} ">
                    <a href="#" class="nav-link">
                       <i class="nav-icon far fa-newspaper"></i>
                        <p>
                            Berita
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard.berita.all') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard.berita.kategori-berita.all') }}" class="nav-link {{ Request::routeIs('admin.dashboard.berita.kategori-berita.*')? 'active': '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Kategori Berita</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>Galeri</p>
                    </a>
                
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Dokumen</p>
                    </a>
                
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>logout</p>
                    </a>
                
                </li>
                <li class="nav-header">-- Atur Halaman Depan --</li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>