<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class M_Users extends CI_Model{

	private $_client;

	function __construct(){
		$this->_client = new Client ([
			'base_uri' => 'http://localhost/codeigniter/rest-api/rest-server/api/users/',
		    'header' => [
		        'Accept' => 'application/json',
		        'Content-Type' => 'application/x-www-form-urlencoded'
		    ],
		]);
	}

	/*
	* function getDataUsers
	* mendapatkan data users
	*/
	public function getDataUsers (){
		try {
			$response = $this->_client->request('GET', '');
			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		} catch (ClientException $e) {
				Psr7\str($e->getRequest());
				Psr7\str($e->getResponse());
		}
	}

	/*
	* function getDataUsersHire
	* mendapatkan data users yang di hire
	*/
	public function getDataUsersHire (){
		try {
			$response = $this->_client->request('GET', 'hire');
			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		} catch (ClientException $e) {
				Psr7\str($e->getRequest());
				Psr7\str($e->getResponse());
		}
	}

	/*
	* function delDataUsersHire
	* melakukan pecat pada karyawan
	*/
	public function delDataUsersHire ($id){
		try {
			$response = $this->_client->request('DELETE', 'hire', [
				'form_params' => [
					'id' => $id
				]
			]);
			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		} catch (ClientException $e) {
				Psr7\str($e->getRequest());
				Psr7\str($e->getResponse());
		}		
	}

	/*
	* function getDataUsersFired
	* mendapatkan data users yang di pecat
	*/
	public function getDataUsersFired (){
		try {
			$response = $this->_client->request('GET', 'fired');
			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		} catch (ClientException $e) {
				Psr7\str($e->getRequest());
				Psr7\str($e->getResponse());
		}
	}
}