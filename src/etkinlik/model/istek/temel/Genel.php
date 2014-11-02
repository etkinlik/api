<?php

namespace Etkinlik\Model\Istek\Temel;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:46 AM
 */
abstract class Genel {

	/**
	 * Özel üretilmiş char[32] tipinde bir string.
	 *
	 * @var char[32]
	 */
	public $hash;

	public function __construct($hash) {

		$this->hash = $hash;
	}
}