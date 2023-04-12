<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function sendlink(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'message' => 'required'
        ]);

        Mail::send('send-email', ['body' => $request->message, 'email' => $request->email, 'name' => $request->name], function ($message) {
            $message->from('team@konsulinaja.id');
            $message->to('prastyopratama01@gmail.com')
                ->subject('Message from website portfolio');
        });

        return response()->json([
            'error' => false,
            'error_message' => ''
        ], 200);
    }
}