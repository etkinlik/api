<?php namespace EtkinlikApi\Model\Temel\Etkinlik;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 12:04 PM
 */
class Ozellik
{
	public $telefon;
	public $mail;
	public $facebook;
	public $twitter;
	public $hashtag;
	public $websitesi;
	public $canliyayin;
	public $android;
	public $ios;
	public $bilet_kayit_link;

	/**
	 * @param object $ozellik
	 */
	public function __construct($ozellik)
	{
		$this->telefon = $ozellik->telefon;
		$this->mail = $ozellik->mail;
		$this->facebook = $ozellik->facebook;
		$this->twitter = $ozellik->twitter;
		$this->hashtag = $ozellik->hashtag;
		$this->websitesi = $ozellik->websitesi;
		$this->canliyayin = $ozellik->canliyayin;
		$this->android = $ozellik->android;
		$this->ios = $ozellik->ios;
		$this->bilet_kayit_link = $ozellik->bilet_kayit_link;
	}
}