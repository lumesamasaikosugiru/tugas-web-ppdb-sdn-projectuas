<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');
Route::post('/proses-daftar', function (Request $request) {
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    // Simpan data ke database (pastikan tabel `pendaftar` sudah ada)
    DB::table('pendaftar')->insert([
        'nama' => $request->nama,
        'email' => $request->email,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect('/daftar')->with('success', 'Pendaftaran berhasil!');
})->name('proses_daftar');