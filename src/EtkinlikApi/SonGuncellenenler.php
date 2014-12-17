<?php namespace EtkinlikApi;

use EtkinlikApi\Model\Cevap\Etkinlik\SonGuncellenenCevap;
use EtkinlikApi\Model\Istek\Etkinlik\SonGuncellenenIstek;
use Exception;
use Httpful\Request;
use Httpful\Response;

class SonGuncellenenler
{
	/**
	 * @param SonGuncellenenIstek $sonGuncellenenIstek
	 *
	 * @return SonGuncellenenCevap;
	 * @throws Exception
	 */
	public static function get($sonGuncellenenIstek)
	{
		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.etkinlik.com.tr/api/v1/etkinlik/son_guncellenenler', $sonGuncellenenIstek->getArray())
			->sendsType('form')
			->expectsType('json')
			->send();

		if ($sonuc->body->sonuc == 0)
			throw new Exception($sonuc->body->mesaj);

		// kayıtları set edelim
		return new SonGuncellenenCevap($sonuc->body->kayitlar);
	}
}