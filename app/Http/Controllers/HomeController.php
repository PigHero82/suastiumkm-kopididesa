<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RoleUser;
use Auth;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (RoleUser::firstRole(Auth::user()->id)->name == 'superadmin') {
            return redirect()->route('superadmin.home');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'adminmart') {
            return redirect()->route('admin.mart.index');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'admincafe') {
            return redirect()->route('admin.cafe.index');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'adminresto') {
            return redirect()->route('admin.resto.index');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'adminlain') {
            return redirect()->route('admin.lain.index');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'kasirmart') {
            return redirect()->route('kasir.mart.home');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'kasircafe') {
            return redirect()->route('kasir.cafe.home');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'kasirresto') {
            return redirect()->route('kasir.resto.home');
        } elseif (RoleUser::firstRole(Auth::user()->id)->name == 'kasirlain') {
            return redirect()->route('kasir.lain.home');
        }
    }
}
