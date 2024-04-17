<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/main-dashboard">
        <div class="sidebar-brand-text mx-3">
            <img src="{{ asset('images/logo/logo-bapeg.png') }}" width="70%">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('main-dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/main-dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item {{ Request::is('main-dashboard/slide-banner') ? 'active' : '' }}">
        <a class="nav-link" href="/main-dashboard/slide-banner">
            <i class="fas fa-fw fa-image"></i>
            <span>Slide Banner</span></a>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-folder"></i>
            <span>Profil</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Profil :</h6>
                <a class="collapse-item" href="/main-dashboard/profil/sejarah">Sejarah</a>
                <a class="collapse-item" href="/main-dashboard/profil/struktur-organisasi">Struktur Organisasi</a>
                <a class="collapse-item" href="/main-dashboard/profil/visi-misi">Visi Misi</a>
                <a class="collapse-item" href="/main-dashboard/profil/tupoksi">Tugas Pokok dan Fungsi</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Layanan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Layanan :</h6>
                <a class="collapse-item" href="/main-dashboard/layanan/pensiun">Pensiun</a>
                <a class="collapse-item" href="/main-dashboard/layanan/kenaikan-pangkat">Kenaikan Pangkat</a>
                <a class="collapse-item" href="/main-dashboard/layanan/gaji-berkala">Gaji Berkala</a>
                <a class="collapse-item" href="/main-dashboard/layanan/mutasi">Mutasi</a>
                <a class="collapse-item" href="/main-dashboard/layanan/izin-tugas-belajar">Izin/Tugas Belajar</a>
                <a class="collapse-item" href="/main-dashboard/layanan/jabatan-fungsional">Jabatan Fungsional</a>
                <a class="collapse-item" href="/main-dashboard/layanan/pencantuman-gelar">Pencantuman Gelar</a>
                <a class="collapse-item" href="/main-dashboard/layanan/satyalancana">Satyalancana</a>
                <a class="collapse-item" href="/main-dashboard/layanan/hukuman-disiplin">Hukuman Disiplin</a>
                <a class="collapse-item" href="/main-dashboard/layanan/cuti">Cuti</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-folder"></i>
            <span>Informasi</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Informasi :</h6>
                <a class="collapse-item" href="/main-dashboard/informasi/berita">Berita</a>
                <a class="collapse-item" href="/main-dashboard/informasi/pengumuman">Pengumuman</a>
                <a class="collapse-item" href="/main-dashboard/informasi/ppid">PPID</a>
                <a class="collapse-item" href="/main-dashboard/informasi/buku-tamu">Buku Tamu</a>
            </div>
        </div>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>