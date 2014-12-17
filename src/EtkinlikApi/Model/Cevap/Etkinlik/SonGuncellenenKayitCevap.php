<?php namespace EtkinlikApi\Model\Cevap\Etkinlik;

use EtkinlikApi\Model\Temel\Etkinlik\Ozellik;
use EtkinlikApi\Model\Temel\Kategori;
use EtkinlikApi\Model\Temel\Konu;
use EtkinlikApi\Model\Temel\Mekan;
use EtkinlikApi\Model\Temel\Tur;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:57 AM
 */
class SonGuncellenenKayitCevap
{
	public $id;
	public $adi;
	public $radi;
	public $icerik;
	public $baslangic_zamani;
	public $bitis_zamani;
	public $is_ucretli;

	/**
	 * @var Mekan
	 */
	public $mekan;

	public $is_afisli;
	public $afis_uzantisi;
	public $afis_adresi;

	/**
	 * @var Tur
	 */
	public $tur;

	/**
	 * @var Kategori
	 */
	public $kategori;

	/**
	 * @var Ozellik
	 */
	public $ozellik;

	/**
	 * @var Konu[]
	 */
	public $konular = array();
}