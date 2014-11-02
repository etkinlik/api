<?php

namespace Etkinlik\Model\Cevap\Etkinlik;

use Etkinlik\Model\Cevap\Etkinlik\Son_guncellenen\Kayit;
use Etkinlik\Model\Cevap\Temel\Genel;
use Etkinlik\Model\Temel\Etkinlik\Ozellik;
use Etkinlik\Model\Temel\Kategori;
use Etkinlik\Model\Temel\Konu;
use Etkinlik\Model\Temel\Mekan;
use Etkinlik\Model\Temel\Tur;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:52 AM
 */

class Son_guncellenen extends Genel {

	/**
	 * @var Kayit[]
	 */
	public $kayitlar = array();

	/**
	 * @param object[] $kayitlar
	 */
	public function __construct($kayitlar) {

		// objeler üzerinde dönelim
		foreach ($kayitlar as $kayit) {

			$yeni_kayit = new Kayit();

			// temel bilgileri set edelim
			$yeni_kayit->id = $kayit->id;
			$yeni_kayit->adi = $kayit->adi;
			$yeni_kayit->radi = $kayit->radi;
			$yeni_kayit->baslangic_zamani = $kayit->baslangic_zamani;
			$yeni_kayit->bitis_zamani = $kayit->bitis_zamani;
			$yeni_kayit->icerik = $kayit->icerik;
			$yeni_kayit->is_ucretli = $kayit->is_ucretli;

			// mekan bilgisini set edelim
			$yeni_kayit->mekan = new Mekan($kayit->mekan);

			$yeni_kayit->is_afisli = $kayit->is_afisli;
			$yeni_kayit->afis_uzantisi = $kayit->afis_uzantisi;
			$yeni_kayit->afis_adresi = $kayit->afis_adresi;

			$yeni_kayit->tur = new Tur($kayit->tur->id, $kayit->tur->adi);

			$yeni_kayit->kategori = new Kategori($kayit->kategori->id, $kayit->kategori->adi);

			$yeni_kayit->ozellik = new Ozellik($kayit->ozellikler);

			// konular üzerinde dönelim
			foreach ($kayit->konular as $konu) {

				$yeni_kayit->konular[] = new Konu($konu->id, $konu->adi);
			}

			// yeni kaydı ekleyelim
			$this->kayitlar[] = $yeni_kayit;
		}
	}
}