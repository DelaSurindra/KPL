<?php

namespace App\Models;

use CodeIgniter\Model;

class SyaratModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'syarat_pendaftaran';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"nama_organisasi", "surat_pemberitahuan", "sk_kemenkumham", "sk_kepengurusan",
		"akte", "ad_art", "program_kerja", "biodata", "ktp", "formulir",
		"surat_keterangan", "npwp", "foto", "keabsahan"
	];

	// Dates
	protected $useTimestamps        = false;
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
