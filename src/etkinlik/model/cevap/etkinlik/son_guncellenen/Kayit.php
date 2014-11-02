<?php

namespace Etkinlik\Model\Cevap\Etkinlik\Son_guncellenen;

use Etkinlik\Model\Temel\Etkinlik\Ozellik;
use Etkinlik\Model\Temel\Kategori;
use Etkinlik\Model\Temel\Konu;
use Etkinlik\Model\Temel\Mekan;
use Etkinlik\Model\Temel\Tur;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:57 AM
 */

class Kayit {

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