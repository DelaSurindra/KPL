<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VisimisiController extends BaseController
{
	public function index()
	{
        $title = "Visi & Misi";
        
        return view('pages/visimisi', compact('title'));
	}
}
