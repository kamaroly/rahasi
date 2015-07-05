<?php namespace Rahasi\Services\SendNotifications\Sms;

use GuzzleHttp\Client;
use Rahasi\Helpers\Helpers;

/**
 * Send sms
 */
class SendSms implements SendNotificationInterface {

	use Helpers;

	protected $url = 'http://121.241.242.114:8080/bulksms/bulksms?';
	protected $source = 'Rahasi';
	protected $type = 0;
	protected $dlr = 1;
	protected $username = 'skyt-huguka';
	protected $password = 'Kigali7';
	public $guzzle;

	public function send(array $params) {
		$digits = 4;
		$params = [
			'destination' => '250722123127',
			'message' => 'Please use this code to confirm payment ' . rand(pow(10, $digits - 1), pow(10, $digits) - 1),
		];

		$client = new Client;

		$res = $client->get($this->getFullUrl($params));

		$response = $res->getBody();

		if (substr($response, 0, 4) === '1701') {
			// message has be delivered
			return true;
		}
		return false;
	}

	private function getFullUrl(array $params) {

		$params['username'] = $this->username;
		$params['password'] = $this->password;
		$params['type'] = $this->type;
		$params['dlr'] = $this->dlr;
		$params['source'] = $this->source;

		return $this->url . $this->build_http_query($params);
	}
}