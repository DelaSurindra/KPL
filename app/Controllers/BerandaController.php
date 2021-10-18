<?php

namespace App\Controllers;

class BerandaController extends BaseController
{
    public function index()
    {
        $title = "Beranda";

        return view('pages/beranda', compact('title'));
    }
}
