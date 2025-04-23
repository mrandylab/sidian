<?php

class Peramban extends CI_Controller{
	public function index()
	{
		$this->load->library('user_agent');
		echo $this->agent->agent_string();
	}

	function cek(){
		$client = new \GuzzleHttp\Client();
		//$client->setUserAgent('Test/123');
				$n =  $client->get('http://localhost/sidi/index.php/peramban',
					[
						'headers'=>[
							'User-Agent'=>'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Mobile Safari/537.36'
						],
					])->getBody()->getContents();
	echo $n;
	}
}
?>