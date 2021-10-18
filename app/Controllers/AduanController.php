<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AduanModel;

class AduanController extends BaseController
{
    protected $aduan;
 
    function __construct()
    {
		helper('form');
        helper('url');
        
        $this->aduan = new AduanModel();
    }

    public function index()
    {
        $title = "Aduan";

        return view('pages/aduan', compact('title'));
    }

    public function store() {
        $data = [
            "nama" => $this->request->getVar("nama"),
            "nama_organisasi" => $this->request->getVar("nama_organisasi"),
            "no_telp" => $this->request->getVar("no_telepon"),
            "email" => $this->request->getVar("email"),
            "judul" => $this->request->getVar("judul"),
            "isi" => $this->request->getVar("isi")
        ];

        $this->aduan->insert($data);

        $to = "maulanait007@gmail.com";
        $subject = "Aduan Organisasi";
        $message = "Pemberitahuan aduan ormas oleh " . $this->request->getVar("nama") . " dari organisasi " . $this->request->getVar("nama_organisasi") . " telah didaftarkan ke dalam database.";

        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('maulanait007@gmail.com', 'Kantor Kesatuan Bangsa dan Politik Kabupaten Semarang');
        
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {

        }
        
        return redirect()->to('/aduan');
    }
}