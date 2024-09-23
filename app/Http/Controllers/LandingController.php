<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\frequentlyasked;
use App\Models\HomeWelcome;
use App\Models\LayananKami;
use App\Models\PaketJasa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    public function getYoutubeVideo() {
        
    
        return view('your-view', compact('videos'));
    }

    public function index(){
        $homeWelcomes = HomeWelcome::all();
        $paketJasa = PaketJasa::all();
        $layanan = LayananKami::all();
        $faq = frequentlyasked::all();
        
        //blog only 7 days
        $sevenDays = Carbon::now()->subDays(7);
        $blog = Blog::where('published_at', '>=', $sevenDays)
                    ->orWhere('created_at', '>=', $sevenDays)
                    ->get();

        //get youtube video
        $apiKey = env('YOUTUBE_API');
        $channelId = env('CHANNEL_ID');
        $maxResults = 5;
    
        $response = Http::get("https://www.googleapis.com/youtube/v3/search", [
            'key' => $apiKey,
            'channelId' => $channelId,
            'part' => 'snippet,id',
            'order' => 'date',
            'maxResults' => $maxResults,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['items'])) {
                $videos = $data['items']; 
                return view('landing.index', compact('homeWelcomes','paketJasa','layanan','faq','blog','videos'));
            } else {
                return back()->with('error', 'Tidak ada video yang ditemukan untuk channel ini.');
            }
        } else {
            return back()->with('error', 'Gagal mendapatkan data dari YouTube API.');
        }

        
    }

    public function admin(){
        return view('admin.home.index');
    }

}
