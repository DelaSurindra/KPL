<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LegalitasController extends BaseController
{
	public function index()
	{
        $title = "Legalitas";
        
        return view('pages/legalitas', compact('title'));
	}
}
