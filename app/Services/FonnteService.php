<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FonnteService
{
    protected $apiUrl = 'https://api.fonnte.com/send';
    protected $token;

    public function __construct()
    {
        $this->token = config('services.fonnte.token'); // Token dari file konfigurasi
    }

    public function sendMessage(string $phone, string $message, array $options = [])
    {
        $data = array_merge([
            'target' => $phone,
            'message' => $message,
        ], $options);

        $response = Http::withHeaders([
            'Authorization' => $this->token,
        ])->post($this->apiUrl, $data);

        return $response->json();
    }
}
