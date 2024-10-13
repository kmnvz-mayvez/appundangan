<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Crypt;


class MainController extends Controller
{
    public function index()
    {
        $kataUndangan = '/undangan';
        $encryptedKataUndangan = Crypt::encryptString($kataUndangan);

        return view('undangan', ['encryptedKata' => $encryptedKataUndangan]);
    }

    public function undangan($data)
    {
       
        $decryptedKata = Crypt::decryptString($data);
        return view('buka-undangan', ['decryptedKata' => $decryptedKata]);
    }

}
