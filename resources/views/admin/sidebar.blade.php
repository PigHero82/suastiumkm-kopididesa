<div class="main-menu-content">
  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="@yield('pembelanjaanactive') nav-item"><a href="/admin/"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Pembelanjaan">Pembelanjaan</span></a></li>
      <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Inventaris">Inventaris</span></a>
        <ul class="menu-content">
            <li class="@yield('stokactive')"><a href="/admin/stok"><i></i><span class="menu-item" data-i18n="Stok Bahan">Stok Bahan</span></a>
            </li>
            <li class="@yield('hppactive')"><a href="/admin/hpp"><i></i><span class="menu-item" data-i18n="Harga Pokok Produksi">Harga Pokok Produksi</span></a>
            </li>
        </ul>
    </li>
  </ul>
</div>