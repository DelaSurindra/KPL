<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TujuanController extends BaseController
{
	public function index()
	{
        $title = "Tujuan";
        
        return view('pages/tugas_fungsi', compact('title'));
	}
}
