<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanController extends Controller
{
    public function Home() {
        return view('welcome');
    }
    public function Keranjang() {
        return view('keranjang');
    }
    public function Detail() {
        return view('detail');
    }
    public function Masuk() {
        return view('masuk');
    }
    public function Checkout() {
        return view('checkout');
    }
    public function Daftar() {
        return view('daftar');
    }
}
