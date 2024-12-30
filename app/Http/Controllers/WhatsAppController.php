<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsAppController extends Controller
{
    public function sendMessage(Request $request)
{
    $request->validate([
        'phone' => 'required|string',
        'message' => 'required|string',
    ]);

    $token = env('FONNTE_API_TOKEN'); // Token Fonnte dari .env
    $response = Http::withHeaders([
        'Authorization' => $token,
    ])->post('https://api.fonnte.com/send', [
        'target' => $request->phone,
        'message' => $request->message,
        'delay' => 0, // Delay pengiriman (opsional)
        'schedule' => null, // Jadwal pengiriman (opsional)
    ]);

    // Debugging response
    dd($response->status(), $response->body());

    if ($response->successful()) {
        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim!',
        ]);
    } else {
        return response()->json([
            'success' => false,
            'error' => $response->body(),
        ], $response->status());
    }
}
}