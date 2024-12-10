<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: blue">
    <a href=# class="brand-link">
        <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>
    <a href=# class="brand-link">
        <span class="brand-text font-weight-light">{{ auth()->user()->email }}</span>
    </a>

    <div class="sidebar mt-3 pb-3 mb-3 d-flex">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pengaduan') }}"
                        class="nav-link {{ request()->is('admin/pengaduan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-exclamation-circle"></i>
                        <p>Pengaduan Masyarakat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.profildesa') }}"
                        class="nav-link {{ request()->is('admin/profildesa') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Profil Desa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.datapenduduk') }}"
                        class="nav-link {{ request()->is('admin/datapenduduk') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Penduduk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.manajemen_pengajuan_surat') }}"
                        class="nav-link {{ request()->is('admin/manajemen_pengajuan_surat') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Surat Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.m_berita') }}"
                        class="nav-link {{ request()->is('admin/m_berita') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita Desa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user') }}"
                        class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Data User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.aparatur') }}"
                        class="nav-link {{ request()->is('admin/aparatur') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Aparatur Desa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.inventory.index') }}"
                        class="nav-link {{ request()->is('admin/inventory') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-warehouse"></i>
                        <p>Inventory</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/peminjaman_barang') }}"
                        class="nav-link {{ request()->is('admin/inventory/borrowings') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Peminjaman Barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.umkm.index') }}"
                        class="nav-link {{ request()->is('admin/umkm') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-store"></i>
                        <p>Umkm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</aside>
