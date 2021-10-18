<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;
use App\Models\PendaftaranModel;
use App\Models\SyaratModel;

class PendaftaranController extends BaseController {
	protected $pendaftaran;
	protected $persyaratan;
	protected $kecamatan;

	function __construct() {
		helper('form');
                helper('url');
                helper('download');
                
		$this->kecamatan = new KecamatanModel();
		$this->pendaftaran = new PendaftaranModel();
		$this->persyaratan = new SyaratModel();
	}

	public function index() {
        $title = "Pendaftaran";

        $list_kecamatan = $this->kecamatan->findAll();
        
        return view('/pages/formpendaftaran', compact('title', 'list_kecamatan'));
	}

	public function store() {
                $nama = $this->request->getVar("nama_organisasi");
                $query = $this->pendaftaran
                        ->where('nama_organisasi', $nama)
                        ->first();
                if ($query) {
			session()->setFlashdata('error', 'Organisasi Sudah Terdaftar.');
			return redirect()->back();
                } else {
                        $file_surat_pemberitahuan = $this->request->getFile("surat_pemberitahuan");
                        $file_name_surat_pemberitahuan = $file_surat_pemberitahuan->getName();
                        $file_sk_kemenkumham = $this->request->getFile("sk_kemenkumham");
                        $file_name_sk_kemenkumham = $file_sk_kemenkumham->getName();
                        $file_sk_kepengurusan = $this->request->getFile("sk_kepengurusan");
                        $file_name_sk_kepengurusan = $file_sk_kepengurusan->getName();
                        $file_akte = $this->request->getFile("akte");
                        $file_name_akte = $file_akte->getName();
                        $file_ad_art = $this->request->getFile("ad_art");
                        $file_name_ad_art = $file_ad_art->getName();
                        $file_program_kerja = $this->request->getFile("program_kerja");
                        $file_name_program_kerja = $file_program_kerja->getName();
                        $file_biodata = $this->request->getFile("biodata");
                        $file_name_biodata = $file_biodata->getName();
                        $file_ktp = $this->request->getFile("ktp");
                        $file_name_ktp = $file_ktp->getName();
                        $file_formulir = $this->request->getFile("formulir");
                        $file_name_formulir = $file_formulir->getName();
                        $file_surat_keterangan = $this->request->getFile("surat_keterangan");
                        $file_name_surat_keterangan = $file_surat_keterangan->getName();
                        $file_npwp = $this->request->getFile("npwp");
                        $file_name_npwp = $file_npwp->getName();
                        $file_foto = $this->request->getFile("foto");
                        $file_name_foto = $file_foto->getName();
                        $file_keabsahan = $this->request->getFile("keabsahan");
                        $file_name_keabsahan = $file_keabsahan->getName();
                        $file_logo = $this->request->getFile("logo");
                        $file_name_logo = $file_logo->getName();
                        $file_bendera = $this->request->getFile("bendera");
                        if ($file_bendera->isValid()) {
                                $file_name_bendera = $file_bendera->getName();
                        } else {
                                $file_name_bendera = "Tanpa Bendera";
                        }

                $waktu = $this->request->getVar("waktu");
                $waktu = date("Y-m-d");

                echo $waktu;
        
                $data = [
                        "nama_organisasi" => $this->request->getVar("nama_organisasi"),
                        "bidang_kegiatan" => $this->request->getVar("bidang_kegiatan"),
                        "ruang_lingkup" => $this->request->getVar("ruang_lingkup"),
                        "alamat" => $this->request->getVar("alamat"),
                        "kecamatan" => $this->request->getVar("kecamatan"),
                        "waktu" => $waktu,
                        "asas" => $this->request->getVar("asas"),
                        "tujuan" => $this->request->getVar("tujuan"),
                        "pendiri" => $this->request->getVar("pendiri"),
                        "pembina" => $this->request->getVar("pembina"),
                        "penasihat" => $this->request->getVar("penasihat"),
                        "ketua" => $this->request->getVar("ketua"),
                        "sekretaris" => $this->request->getVar("sekretaris"),
                        "bendahara" => $this->request->getVar("bendahara"),
                        "masa_bhakti" => $this->request->getVar("masa_bhakti"),
                        "keputusan_tertinggi" => $this->request->getVar("keputusan_tertinggi"),
                        "unit_organisasi" => $this->request->getVar("unit_organisasi"),
                        "logo" => $file_name_logo,
                        "bendera" => $file_name_bendera,
                        "email" => $this->request->getVar("email"),
                        "no_telepon" => $this->request->getVar("no_telepon")
                        ];
                        
                $syarat = [
                        "nama_organisasi" => $this->request->getVar("nama_organisasi"),
                        "surat_pemberitahuan" => $file_name_surat_pemberitahuan,
                        "sk_kemenkumham" => $file_name_sk_kemenkumham,
                        "sk_kepengurusan" => $file_name_sk_kepengurusan,
                        "akte" => $file_name_akte,
                        "ad_art" => $file_name_ad_art,
                        "program_kerja" => $file_name_program_kerja,
                        "biodata" => $file_name_biodata,
                        "ktp" => $file_name_ktp,
                        "formulir" => $file_name_formulir,
                        "surat_keterangan" => $file_name_surat_keterangan,
                        "npwp" => $file_name_npwp,
                        "foto" => $file_name_foto,
                        "keabsahan" => $file_name_keabsahan
                        ];
        
                        $file_surat_pemberitahuan->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Surat Pemberitahuan - " . $file_name_surat_pemberitahuan);
                
                        $file_sk_kemenkumham->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "SK Kemenkumham - " . $file_name_sk_kemenkumham);
                
                        $file_sk_kepengurusan->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "SK Kepengurusan - " . $file_name_sk_kepengurusan);
                
                        $file_akte->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Akte - " . $file_name_akte);
                
                        $file_ad_art->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "AD & ART - " . $file_name_ad_art);
                
                        $file_program_kerja->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Program Kerja - " . $file_name_program_kerja);
                
                        $file_biodata->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Biodata - " . $file_name_biodata);
                
                        $file_ktp->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "KTP - " . $file_name_ktp);
                
                        $file_formulir->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Formulir - " . $file_name_formulir);
                
                        $file_surat_keterangan->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Surat Keterangan - " . $file_name_surat_keterangan);
                
                        $file_npwp->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "NPWP - " . $file_name_npwp);
                
                        $file_foto->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Foto Kantor - " . $file_name_foto);
                
                        $file_keabsahan->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Keabsahan - " . $file_name_keabsahan);
        
                        $file_logo->move('document/pendaftaran/' . 
                        $this->request->getVar("nama_organisasi"), "Logo - " . $file_name_logo);
                
                        if ($file_bendera->isValid()) {
                                $file_bendera->move('document/pendaftaran/' . 
                                $this->request->getVar("nama_organisasi"), "Bendera - " . $file_name_bendera);
                        }
        
                        $this->pendaftaran->insert($data);
                        $this->persyaratan->insert($syarat);

                        $to = "maulanait007@gmail.com";
                        $subject = "Pendaftaran Organisasi";
                        $message = "Pemberitahuan data organisasi baru dengan nama " . $this->request->getVar("nama_organisasi") . " telah didaftarkan ke dalam database.";
        
                        $email = \Config\Services::email();

                        $email->setTo($to);
                        $email->setFrom('maulanait007@gmail.com', 'Kantor Kesatuan Bangsa dan Politik Kabupaten Semarang');
                        
                        $email->setSubject($subject);
                        $email->setMessage($message);

                        if ($email->send()) {
                                
                        }
                        return redirect()->to('/pendaftaran');
                }
	}
}