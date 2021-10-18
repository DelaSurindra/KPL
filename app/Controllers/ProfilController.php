<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class ProfilController extends BaseController
{
	protected $pegawai;

	function __construct() {
		$this->pegawai = new PegawaiModel();
	}

	public function index()
	{
		$title = "Profil";
		
		$list_pegawai = $this->pegawai->findAll();
        
        return view('pages/struktur_pegawai', compact('title', 'list_pegawai'));
	}
}
