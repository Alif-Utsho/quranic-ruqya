<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = [];
        $data['video_count'] = Video::all()->count();
        $data['ayat_count'] = Audio::where('isAyat', true)->whereDate('created_at', Carbon::today())->count();
        $data['audio_count'] = Audio::where('isAyat', false)->get()->count();

        return view('backend.dashboard.index', $data);
    }
}
