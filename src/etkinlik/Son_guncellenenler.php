<?php

namespace Etkinlik;

use Httpful\Request;
use Httpful\Response;
use Etkinlik\Model\Cevap\Etkinlik\Son_guncellenen;

class Son_guncellenenler {

	/**
	 * @param Model\Istek\Etkinlik\Son_guncellenen $son_guncellenen_istek
	 *
	 * @return Model\Cevap\Etkinlik\Son_guncellenen;
	 * @throws
	 */
	public static function get($son_guncellenen_istek) {

		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.etkinlik.com.tr/api/v1//etkinlik/son_guncellenenler', $son_guncellenen_istek->get_as_array())
			->sendsType('form')
			->expectsType('json')
			->send();

		if ($sonuc->body->sonuc == 0)
			throw new \Exception($sonuc->body->mesaj);

		// kayıtları set edelim
		return new Son_guncellenen($sonuc->body->kayitlar);
	}
}