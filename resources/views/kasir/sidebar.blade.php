<div class="main-menu-content">
  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="@yield('orderactive') nav-item"><a href="{{ route('kasir.order') }}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Order">Order</span></a></li>
      <li class="@yield('penjualanactive') nav-item"><a href="{{ route('kasir.penjualan') }}"><i class="fa fa-money"></i><span class="menu-title" data-i18n="Penjualan">Penjualan</span></a></li>
  </ul>
</div>