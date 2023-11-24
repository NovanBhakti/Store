<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\KonfirmasiEmail;
use App\Models\Peserta;

class RegistrasiController extends Controller
{
    public function submit(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
        ];

        $peserta = Peserta::create($data);

        // Kirim email konfirmasi
        Mail::to($data['email'])->send(new KonfirmasiEmail($peserta));

        return view('emailforuser');
    }
}
