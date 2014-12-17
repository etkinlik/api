<?php namespace EtkinlikApi\Model\Cevap\Etkinlik;

use EtkinlikApi\Model\Cevap\Temel\GenelCevap;
use EtkinlikApi\Model\Temel\Etkinlik\Ozellik;
use EtkinlikApi\Model\Temel\Kategori;
use EtkinlikApi\Model\Temel\Konu;
use EtkinlikApi\Model\Temel\Mekan;
use EtkinlikApi\Model\Temel\Tur;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:52 AM
 */

class SonGuncellenenCevap extends GenelCevap
{
	/**
	 * @var SonGuncellenenKayitCevap[]
	 */
	public $kayitlar = array();

	/**
	 * @param object[] $kayitlar
	 */
	public function __construct($kayitlar)
	{
		// objeler üzerinde dönelim
		foreach ($kayitlar as $kayit) {

			$yeniKayit = new SonGuncellenenKayitCevap();

			// temel bilgileri set edelim
			$yeniKayit->id = $kayit->id;
			$yeniKayit->adi = $kayit->adi;
			$yeniKayit->radi = $kayit->radi;
			$yeniKayit->baslangic_zamani = $kayit->baslangic_zamani;
			$yeniKayit->bitis_zamani = $kayit->bitis_zamani;
			$yeniKayit->icerik = $kayit->icerik;
			$yeniKayit->is_ucretli = $kayit->is_ucretli;

			// mekan bilgisini set edelim
			$yeniKayit->mekan = new Mekan($kayit->mekan);

			$yeniKayit->is_afisli = $kayit->is_afisli;
			$yeniKayit->afis_uzantisi = $kayit->afis_uzantisi;
			$yeniKayit->afis_adresi = $kayit->afis_adresi;

			$yeniKayit->tur = new Tur($kayit->tur->id, $kayit->tur->adi);

			$yeniKayit->kategori = new Kategori($kayit->kategori->id, $kayit->kategori->adi);

			$yeniKayit->ozellik = new Ozellik($kayit->ozellikler);

			// konular üzerinde dönelim
			foreach ($kayit->konular as $konu) {

				$yeniKayit->konular[] = new Konu($konu->id, $konu->adi);
			}

			// yeni kaydı ekleyelim
			$this->kayitlar[] = $yeniKayit;
		}
	}
}