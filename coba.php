<?php

class kendaraan{
	protected $jmlroda;
	public $warna;
	public $bahanbakar;
	public $harga;
	private $merek;

	public function __construct($z , $x)
	{
		# code...
		$this->merek = $z;
		$this->harga = $x;
	}

	public function statusharga()
	{
		# code...
		if ($this->harga > 10000000) {
			# code...
			$status = "Mahal";
		}
		else {
			$status = "Murah";
		}
		return $status;
	}

	public function setmerk($z)
	{
		# code...
		$this->merek = $z;
	}

	public function setharga($x)
	{
		# code...
		$this->harga = $x;
	}

	public function bacamerek()
	{
		# code...
		return $this->merek;
	}

	public function bacaharga()
	{
		return $this->harga;
	}
}

class ka extends kendaraan
{
	public $jmlgerbong;

	function setgerbong($z)
	{
		$this->jmlgerbong = $z;
	}

	function bacagerbong()
	{
		# code...
		return $this->jmlgerbong;
	}
}