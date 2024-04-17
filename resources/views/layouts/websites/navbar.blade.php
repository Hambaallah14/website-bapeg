<nav class="navbar fixed-top navbar-expand-lg p-3" style="background-color: #01a3a4;">
    <div class="container">
      <a href="/">
        <img src="{{ asset('images/logo/logo-bapeg.png') }}" alt="" srcset="" width="10%">
      </a>
      {{-- <a class="navbar-brand text-light" href="/">BAPEG PROVSU</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/">HOME</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PROFIL
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/profil/sejarah">Sejarah</a></li>
              <li><a class="dropdown-item" href="/profil/struktur-organisasi">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="/profil/visi-misi">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="/profil/tupoksi">Tugas Pokok dan Fungsi</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              INFORMASI
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/buku_tamu/create/#section-buku_tamu">Buku Tamu</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PPID
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/ppid/struktur">Struktur</a></li>
              <li><a class="dropdown-item" href="/ppid/informasi">Informasi</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>