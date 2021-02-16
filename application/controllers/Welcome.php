<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Telegram\Bot\Api;

class Welcome extends CI_Controller {

function __construct()	{

	parent::__construct();
			require_once APPPATH . '/third_party/vendor/autoload.php';
		}

	
	public function index() {
		$chat_id = "810360085";

		
		$telegram = new Api('1531265288:AAGTjottqDKIVhmZIrE51-Z9xiRQCc8f968');
		$command = new Telegram\Bot\Commands\StartCommand();
		$telegram->addCommand($command);
		$update = $telegram->commandsHandler(false);

	echo print_r($update);

	}
}
