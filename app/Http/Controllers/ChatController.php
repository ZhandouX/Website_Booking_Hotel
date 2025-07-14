<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function send(Request $request)
{
    $prompt = $request->input('message');

    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'X-goog-api-key' => env('GEMINI_API_KEY'),
    ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent', [
        'contents' => [
            [
                'parts' => [
                    ['text' => $prompt]
                ]
            ]
        ]
    ]);

    if (!$response->successful()) {
        return response()->json([
            'reply' => '❌ Request gagal: ' . $response->status(),
            'error' => $response->json(),
        ]);
    }

    $json = $response->json();

    if (!isset($json['candidates'][0]['content']['parts'][0]['text'])) {
        return response()->json([
            'reply' => '⚠️ Tidak ada balasan dari Gemini.',
            'full_response' => $json
        ]);
    }

    $reply = $json['candidates'][0]['content']['parts'][0]['text'];

    return response()->json(['reply' => $reply]);
}

}
