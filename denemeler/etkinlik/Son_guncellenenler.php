<?php

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

use Etkinlik\Son_guncellenenler;
use Etkinlik\Model\Istek\Etkinlik\Son_guncellenen;

// hash bilgisini buraya yazınız.
$hash = '';

$son_guncellenen_istek = new Son_guncellenen($hash);

try {

	$son_guncellenen_cevap = Son_guncellenenler::get($son_guncellenen_istek);

	echo '<pre>';
	print_r($son_guncellenen_cevap);

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
