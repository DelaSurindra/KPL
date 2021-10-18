<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'form_pendaftaran';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"nama_organisasi", "bidang_kegiatan", "ruang_lingkup",
		"alamat", "kecamatan", "waktu", "asas", "tujuan", "pendiri",
		"pembina", "penasihat", "ketua", "sekretaris", "bendahara",
		"masa_bhakti", "keputusan_tertinggi", "unit_organisasi", 
		"logo", "bendera", "email", "no_telepon"
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
