<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;
use App\Models\PendaftaranModel;

class KecamatanController extends BaseController
{
	protected $pendaftaran;
	protected $kecamatan;

	function __construct() {
		$this->pendaftaran = new PendaftaranModel();
		$this->kecamatan = new KecamatanModel();
	}

	public function index()
	{
		$title = "Data Kecamatan";
		
		$list_kecamatan = $this->kecamatan->findAll();

		$select_kecamatan = $this->request->getVar("select-kecamatan");

		if (isset($select_kecamatan)) {
			$data_kecamatan = $this->pendaftaran
								->where("kecamatan", $select_kecamatan)
								->findAll();

			return view('pages/dataperkec', compact('title', 'list_kecamatan', 'data_kecamatan', 'select_kecamatan'));
		}

		return view('pages/dataperkec', compact('title', 'list_kecamatan', 'select_kecamatan'));
	}

	public function detail($id) {
		$title = $this->pendaftaran->where("id", $id)->findAll();
		$data_organisasi = $this->pendaftaran->where("form_pendaftaran.id", $id)
											->join('daftar_kecamatan', 'daftar_kecamatan.id = form_pendaftaran.kecamatan')
											->find();

		foreach ($title as $data) {
			$title = $data["nama_organisasi"];
		}

		return view('pages/profil', compact('title', 'data_organisasi'));
	}

	public function update() {
		$this->pendaftaran->update($this->request->getVar("id"), [
			"nama_organisasi" => $this->request->getVar("nama_organisasi"),
			"bidang_kegiatan" => $this->request->getVar("bidang_kegiatan"),
			"alamat" => $this->request->getVar("alamat"),
		]);

		return redirect()->to("/data-kecamatan?select-kecamatan=" . $this->request->getVar("kecamatan"));
	}

	public function delete($kecamatan, $id) {
		$this->pendaftaran->delete($id);

		return redirect()->to("/data-kecamatan?select-kecamatan=" . $kecamatan);
	}
}
