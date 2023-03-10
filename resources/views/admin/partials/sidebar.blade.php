<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href={{route('paket.index')}}>
          <i class="bi bi-grid"></i>
          <span>Paket</span>
        </a>
      </li><!-- End Dashboard Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Paket Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href=#>
              <i class="bi bi-circle"></i><span>Semua Paket</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Paket 2P</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Paket 3P</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Paket Gamer</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Paket Pelajar</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Promo Intenet + Telepon</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Promo Intenet + Telepon + TV</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href={{route('kategori.index')}}>
          <i class="bi bi-journal-text"></i><span>Kategori</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          {{-- <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Ubah Password</span>
            </a>
          </li> --}}
          <li>
            <a href="{{route('logout')}}">
              <i class="bi bi-circle"></i><span>Log Out</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
    </ul>
  </aside><!-- End Sidebar-->