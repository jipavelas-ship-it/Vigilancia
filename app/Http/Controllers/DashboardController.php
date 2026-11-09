<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard.index', [
            'appName'    => config('app.name'),
            'subtitle'   => config('camaras.subtitle'),
            'cameraName' => config('camaras.camera_name'),
            'streamPath' => config('camaras.stream_path'),
            'streamUrl'  => config('camaras.stream_url'),
            'playbackUrl' => config('camaras.playback_url'),
        ]);
    }
}
