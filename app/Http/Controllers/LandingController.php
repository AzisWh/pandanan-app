<?php

namespace App\Http\Controllers;

use App\Models\frequentlyasked;
use App\Models\HomeWelcome;
use App\Models\LayananKami;
use App\Models\PaketJasa;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $homeWelcomes = HomeWelcome::all();
        $paketJasa = PaketJasa::all();
        $layanan = LayananKami::all();
        $faq = frequentlyasked::all();
        return view('landing.index', compact('homeWelcomes','paketJasa','layanan','faq'));
    }

    public function admin(){
        return view('admin.home.index');
    }

}
