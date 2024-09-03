<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\frequentlyasked;
use App\Models\HomeWelcome;
use App\Models\LayananKami;
use App\Models\PaketJasa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LandingController extends Controller
{
    public function index(){
        $homeWelcomes = HomeWelcome::all();
        $paketJasa = PaketJasa::all();
        $layanan = LayananKami::all();
        $faq = frequentlyasked::all();
        
        // Fetch only blogs within the last 7 days
        $sevenDays = Carbon::now()->subDays(7);
        $blog = Blog::where('published_at', '>=', $sevenDays)
                    ->orWhere('created_at', '>=', $sevenDays)
                    ->get();
        return view('landing.index', compact('homeWelcomes','paketJasa','layanan','faq','blog'));
    }

    public function admin(){
        return view('admin.home.index');
    }

}
