<?php

namespace Etkinlik\Model\Istek\Etkinlik;

use Etkinlik\Model\Istek\Temel\Genel;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:47 AM
 */

class Son_guncellenen extends Genel {

	/**
	 * LIMIT ifadesinin ilk kısmı
	 *
	 * @var int
	 */
	public $limit_from = 0;

	/**
	 * LIMIT ifadesinin ikinci kısmı
	 *
	 * @var int
	 */
	public $limit_adet = 20;

	public function get_as_array() {

		return array(
			'hash' => $this->hash,
			'limit_from' => $this->limit_from,
			'limit_adet' => $this->limit_adet
		);
	}

}