<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
<<<<<<< HEAD
       
=======
>>>>>>> d17c2b5b2ab23c88e77105a89cbe9daedb84cc13
        $pasienCount = Pasien::count();
        $pembayaranCount = Pembayaran::count();
        return view("admin.dashboard.index", compact("pasienCount","pembayaranCount"));
    }
}
