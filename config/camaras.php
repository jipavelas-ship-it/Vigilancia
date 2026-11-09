<?php

return [
    'subtitle'    => env('APP_SUBTITLE', 'Sistema de videovigilancia'),
    'camera_name' => env('CAMERA_NAME', 'Cámara 01'),
    'stream_path' => env('STREAM_PATH', 'camara1'),
    // URL pública del manifiesto HLS, p. ej. https://TU_DOMINIO/hls/camara1/index.m3u8
    'stream_url'  => env('STREAM_URL', ''),
    // Ruta pública (Nginx) hacia el servidor de reproducción de MediaMTX
    'playback_url' => env('PLAYBACK_URL', '/playback'),
];
