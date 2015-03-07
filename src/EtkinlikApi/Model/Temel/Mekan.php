<?php namespace EtkinlikApi\Model\Temel;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:58 AM
 */
class Mekan
{
	public $id;
	public $adi;
	public $radi;
	public $adresi;

	public $harita_latitude;
	public $harita_longitude;

	public $tel;
	public $websitesi;
	public $facebook;
	public $twitter;
	public $semt_id;
	public $semt_adi;
	public $ilce_id;
	public $ilce_adi;
	public $sehir_id;
	public $sehir_adi;
	public $sehir_radi;

	/**
	 * @param object $mekan
	 */
	public function __construct($mekan)
	{
		$this->id = $mekan->id;

		$this->adi = $mekan->adi;
		$this->radi = $mekan->radi;
		$this->adresi = $mekan->adresi;

		$this->harita_latitude = $mekan->harita_latitude;
		$this->harita_longitude = $mekan->harita_longitude;

		$this->tel = $mekan->tel;
		$this->websitesi = $mekan->websitesi;
		$this->facebook = $mekan->facebook;
		$this->twitter = $mekan->twitter;

		$this->semt_id = $mekan->semt_id;
		$this->semt_adi = $mekan->semt_adi;

		$this->ilce_id = $mekan->ilce_id;
		$this->ilce_adi = $mekan->ilce_adi;

		$this->sehir_id = $mekan->sehir_id;
		$this->sehir_adi = $mekan->sehir_adi;
		$this->sehir_radi = $mekan->sehir_radi;
	}
}