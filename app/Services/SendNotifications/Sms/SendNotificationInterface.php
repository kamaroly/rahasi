<?php namespace Rahasi\Services\SendNotifications\Sms;

interface SendNotificationInterface {
	public function send(array $details);
}