<div class="main-menu-content">
  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="@yield('labarugiactive') nav-item"><a href="{{ route('superadmin.labarugi') }}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Laba Rugi">Laba Rugi</span></a></li>
      <li class="@yield('stokactive') nav-item"><a href="{{ route('superadmin.stok') }}"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Stok Bahan">Stok Bahan</span></a></li>
      <li class="@yield('laporanactive') nav-item"><a href="{{ route('superadmin.laporan') }}"><i class="fa fa-clipboard"></i><span class="menu-title" data-i18n="Laporan">Laporan</span></a></li>
  </ul>
</div>