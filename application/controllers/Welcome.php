<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$client = new \GuzzleHttp\Client();
      	$jar = new \GuzzleHttp\Cookie\CookieJar();



        //config

        $ua =['User-Agent'=>'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Mobile Safari/537.36'];
                        

	$m =  $client->post('https://ekinerja.baritoutarakab.go.id/login/login_process', [
        'headers'=>$ua,
        'cookies' => $jar,
        'form_params' =>[
                            'username'=>'196909171991032013',
                            'password'=> '196909171991032013'
        ],
      ])->getBody()->getContents();

		$n =  $client->post('https://ekinerja.baritoutarakab.go.id/present/map/send_loc', [
            'headers'=>$ua,
            'cookies' => $jar,
            'form_params' =>[
                'i' => '2122375',
                'v' => '2.6',
                'e' => 'bfee36e47cb4d09c-405cb9ee1d000000,0,110011,1,+10000'
//          lat-lng,rep,dtm,nsm,+10000
//let des=tHS(dArr(lat))+'-'+tHS(dArr(lng))+','+rep+','+(dtm1-dtm)+','+nsm+','+10000;

            ],
          ])->getBody()->getContents();

	echo $n;
	}
}
