<?php

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

use EtkinlikApi\Model\Istek\Etkinlik\SonGuncellenenIstek;
use EtkinlikApi\SonGuncellenenler;

// hash bilgisini buraya yazınız.
$hash = '';

$sonGuncellenenIstek = new SonGuncellenenIstek($hash);

try {

	$sonGuncellenenCevap = SonGuncellenenler::get($sonGuncellenenIstek);

	echo '<pre>';
	print_r($sonGuncellenenCevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
