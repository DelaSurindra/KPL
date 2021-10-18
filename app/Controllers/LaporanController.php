<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\LaporanModel;

class LaporanController extends BaseController
{
    protected $laporan;
 
    function __construct()
    {
		helper('form');
		helper('url');
		
        $this->laporan = new LaporanModel();
	}
	
	public function index()
	{
        $title = "Laporan";
        
        return view('pages/laporan', compact('title'));
	}

	public function store() {
		$file = $this->request->getFile("foto");
		$file_name = $file->getName();

		$data = [
			"nama_organisasi" => $this->request->getVar("nama_organisasi"),
			"judul" => $this->request->getVar("judul"),
			"deskripsi" => $this->request->getVar("deskripsi"),
			"foto" => $file_name
		];

		$this->laporan->insert($data);

		$file->move('document/Laporan/' . $this->request->getVar("nama_organisasi"), "Foto Kegiatan - " . $file_name);


        $to = "maulanait007@gmail.com";
        $subject = "Laporan Organisasi";
        $message = "Pemberitahuan laporan ormas oleh " . $this->request->getVar("nama") . " dari organisasi " . $this->request->getVar("nama_organisasi") . " telah didaftarkan ke dalam database.";

        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('maulanait007@gmail.com', 'Kantor Kesatuan Bangsa dan Politik Kabupaten Semarang');
        
        $email->setSubject($subject);
        $email->setMessage($message);

		if ($email->send()) {

		}
        return redirect()->to('/laporan');
	}
}
