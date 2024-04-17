<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/dashboard"><img src="{{ url('images/si-pena-pintar-logo.png') }}" style="width:100%;height:auto;" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
            
                <li class="sidebar-item {{ ($title === "Dashboard") ? 'active' : '' }}">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Input Data</span>
                    </a>

                    <ul class="submenu ">
                        <li class="submenu-item">
                            <a href="plugins/peserta" class="disabled">Peserta</a>
                        </li>

                        <li class="submenu-item ">
                            <a href="plugins/widyaiswara">Widyaiswara</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="plugins/penceramah">Penceramah</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="plugins/pendamping">Pendamping</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="plugins/mata_pelajaran">Mata Pelajaran</a>
                        </li>
                    </ul>
                </li>
                
            
                <li class="sidebar-item {{ ($title === "Pembagian Kelompok") ? 'active' : '' }}">
                    <a href="/pembagian-kelompok" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Pembagian Kelompok</span>
                    </a>
                </li>
                                    
                <li class="sidebar-item  {{ ($title === "Pengampu Materi") ? 'active' : '' }}">
                    <a href="/pengampu-materi" class='sidebar-link'>
                        <i class="bi bi-book-half"></i>
                        <span>Pengampu Materi</span>
                    </a>
                </li>
                                    
                <!-- JADWAL -->
                <li class="sidebar-item  ">
                    <a href="/jadwal" class='sidebar-link'>
                        <i class="bi bi-calendar-event-fill"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                
            
                <li class="sidebar-item  ">
                    <a href="/logout" class='sidebar-link'>
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div> <!-- END SIDEBAR -->