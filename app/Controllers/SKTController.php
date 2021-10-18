<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SktController extends BaseController
{
	public function index()
	{
        $title = "SKT";
        
        return view('pages/skt', compact('title'));
	}
}
