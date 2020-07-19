@if (Auth::user()->firstRole(Auth::user()->id) == 'superadmin')
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'adminmart')
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'admincafe')
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'adminresto')
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'adminlain')
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'kasirmart')
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'kasircafe')
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="@yield('kasiractive') nav-item"><a href="{{ route('kasir.cafe.home') }}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Kasir">Kasir</span></a></li>
        <li class="@yield('pembelanjaanactive') nav-item"><a href="{{ route('kasir.cafe.penjualan') }}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Penjualan">Penjualan</span></a></li>
    </ul>
  </div>
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'kasirresto')
@elseif (Auth::user()->firstRole(Auth::user()->id) == 'kasirlain')
@endif
{{-- <div class="main-menu-content">
  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="@yield('pembelanjaanactive') nav-item"><a href="{{ route('admin.cafe.index') }}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Pembelanjaan">Pembelanjaan</span></a></li>
      <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Inventaris">Inventaris</span></a>
        <ul class="menu-content">
            <li class="@yield('stokactive')"><a href="{{ route('stok.index') }}"><i></i><span class="menu-item" data-i18n="Stok Bahan">Stok Bahan</span></a>
            </li>
            <li class="@yield('hppactive')"><a href="{{ route('admin.hpp') }}"><i></i><span class="menu-item" data-i18n="Harga Pokok Produksi">Harga Pokok Produksi</span></a>
            </li>
        </ul>
    </li>
  </ul>
</div> --}}