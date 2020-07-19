<?php

namespace App\Http\Controllers\KasirCafe;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

use App\DetailPenjualan;
use App\Menu;
use App\Penjualan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:kasircafe');
    }

    public function index()
    {
        $menu = Menu::all();

        return view('kasir.cafe.order', compact('menu'));
    }

    public function pembayaran(Request $request)
    {
        $penjualanId = Penjualan::storePenjualan();
        $detailPenjualan = DetailPenjualan::storeDetailPenjualan($penjualanId, $request);

        return view('kasir.cafe.pembayaran', compact('detailPenjualan'));
    }

    public function penjualan()
    {
        $kasir = Penjualan::getPenjualanByKasir(Auth::user()->id);
        // if (isset($kasir)) {
            foreach ($kasir as $key => $value) {
                $penjualan[$key]['penjualan'] = Penjualan::firstPenjualan($kasir[0]->id);
                $penjualan[$key]['items'] = DetailPenjualan::getDetailPenjualan($penjualan[$key]['penjualan']->id);
            }
            
            return view('kasir.cafe.penjualan', compact('penjualan'));
            return $penjualan;
        // } else {
        //     return [
        //         'penjualan' => NULL
        //     ];
        // }
    }
}
