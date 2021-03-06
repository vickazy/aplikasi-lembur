<?php
class DataPengajuan extends Eloquent{

	protected $table = 'data_karyawan_lembur';

	protected $primaryKey = 'no_spl';

	public $timestamps = false;

	protected $fillable = array('nik');

	public function karyawan()
	{
		return $this->hasOne('Karyawan', 'nik', 'nik');
	}
}