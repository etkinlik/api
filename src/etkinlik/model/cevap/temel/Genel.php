<?php

namespace Etkinlik\Model\Cevap\Temel;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:53 AM
 */

abstract class Genel {

	/**
	 * 1 ise işlem başarılı demektir.
	 * 0 ise işlem başarısız demektir. Bu durumda mesaj içeriğinde hata bilgisi yer alır.
	 *
	 * @var tinyint(1)
	 */
	public $sonuc;
	public $mesaj;
}