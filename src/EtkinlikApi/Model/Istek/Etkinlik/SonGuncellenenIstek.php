<?php namespace EtkinlikApi\Model\Istek\Etkinlik;

use EtkinlikApi\Model\Istek\Temel\GenelIstek;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:47 AM
 */

class SonGuncellenenIstek extends GenelIstek
{
	/**
	 * LIMIT ifadesinin ilk kısmı
	 *
	 * @var int
	 */
	public $limitFrom = 0;

	/**
	 * LIMIT ifadesinin ikinci kısmı
	 *
	 * @var int
	 */
	public $limitAdet = 20;

	public function getArray()
	{
		return array(
			'hash' => $this->hash,
			'limit_from' => $this->limitFrom,
			'limit_adet' => $this->limitAdet
		);
	}

}