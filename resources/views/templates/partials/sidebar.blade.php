<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark">
      <a href=".">
        <h2>Andhika Jaya Perkasa</h2>
      </a>
    </h1>
    <div class="collapse navbar-collapse" id="sidebar-menu">
      <ul class="navbar-nav pt-lg-3">
        <li class="nav-item">
          <a class="nav-link" href="./" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            </span>
            <span class="nav-link-title">
              Dashboard
            </span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" /></svg>
            </span>
            <span class="nav-link-title">
              Tata Kelola
            </span>
          </a>
          <div class="dropdown-menu">
            <div class="dropdown-menu-columns">
              <div class="dropdown-menu-column">
              <a class="dropdown-item" href="{{ route('absensi.index') }}">
                Absensi Karyawan
              </a>
              <a class="dropdown-item" href="{{ route('gaji.index') }}">
                Gaji Karyawan
              </a>
              <a class="dropdown-item" href="{{ route('tunjangan.index') }}">
                Tunjangan
              </a>
              <a class="dropdown-item" href="{{ route('karyawan.index') }}">
                Karyawan
              </a>
              <a class="dropdown-item" href="{{ route('perizinan.index') }}">
                Perizinan Karyawan
                <!-- <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span> -->
              </a>
              <a class="dropdown-item" href="{{ route('pengajuanizin.index') }}">
                Pengajuan Perizinan Karyawan
              </a>
              <a class="dropdown-item" href="{{ route('training.index') }}">
                Training Karyawan
              </a>
              <a class="dropdown-item" href="{{ route('user.index') }}">
                Data User
                <!-- <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span> -->
              </a>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</aside>