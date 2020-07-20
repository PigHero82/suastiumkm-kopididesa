<?php

namespace App\Http\Controllers\KasirCafeResto;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

use App\Menu;
use App\Payment;
use App\PaymentDetail;

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
        $this->middleware('role:kasircaferesto');
    }

    public function index()
    {
        $categories = Menu::distinct('menus.category_id')
                            ->select('menus.category_id as id', 'categories.name')
                            ->join('categories', 'menus.category_id', 'categories.id')
                            ->where('menus.department_id', 2)
                            ->orWhere('menus.department_id', 3)
                            ->get();
        $menu = Menu::where('department_id', 2)
                        ->orWhere('menus.department_id', 3)
                        ->get();

        return view('kasir.cafe.order', compact('categories', 'menu'));
    }

    public function pembayaran(Request $request)
    {
        $penjualanId = Payment::storePayment();
        $detailPenjualan = PaymentDetail::storePaymentDetail($penjualanId, $request);

        return view('kasir.cafe.pembayaran', compact('detailPenjualan'));
    }

    public function validasiPembayaran(Request $request)
    {
        $valid = Payment::validPayment($request);

        return redirect()->route('kasir.cafe.home')->with('success', 'Transaksi berhasil');
    }

    public function penjualan()
    {
        $kasir = Payment::getPaymentByKasir(Auth::user()->id);
        // if (isset($kasir)) {
            foreach ($kasir as $key => $value) {
                $penjualan[$key]['order'] = Payment::firstPayment($kasir[0]->id);
                $penjualan[$key]['items'] = PaymentDetail::getPaymentDetail($penjualan[$key]['order']->id);
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
