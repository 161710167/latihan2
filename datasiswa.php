<?php
class datasiswa
{
public $nama;
public $nis;
public $kelas;
public $ttl;



public function __construct($nama, $nis, $kelas, $ttl)
{
$this->nama = $nama;
$this->nis  = $nis;
$this->kelas = $kelas;
$this->ttl = $ttl;
}

public function get_nama()
	{
		return $this->nama;
	}
	public function get_nis()
	{
		return $this->nis;
	}
	public function get_kelas()
	{
		return $this->kelas;
	}
	public function get_ttl()
	{
		return $this->ttl;
	}
}


?>