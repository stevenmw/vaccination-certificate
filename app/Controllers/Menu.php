<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function about()
    {
        $data['title'] = 'Tentang';
        return view('pages/about', $data);
    }

    public function method()
    {
        $data['title'] = 'method';
        return view('pages/method', $data);
    }

    public function syarat()
    {
        $data['title'] = 'Syarat Penggunaan';
        return view('pages/syarat', $data);
    }

    public function kebijakan()
    {
        $data['title'] = 'Kebijakan Privasi';
        return view('pages/kebijakan', $data);
    }
}
