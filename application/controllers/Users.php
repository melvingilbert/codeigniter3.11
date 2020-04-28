<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Users', 'users');
	}

	function index(){
        $header = array(
            'title' => 'Judul Page',
            'content' => 'users/v_list',
        );
        $api = $this->users->getDataUsers();
        $api = [
        	'status' => $api['status'],
        	'data' => $api['data'],
        ];
        $data = array(
        	'header' => $header,
        	'api' => $api,

        );
        $this->load->view('layout/v_app', $data);
	}

	function hire($idx='index', $id=NULL){

        if($id==NULL){
            $header = array(
                'title' => 'Judul Page',
                'content' => 'users/hire/v_list',
            );
            $api = $this->users->getDataUsersHire();
            $api = [
                'status' => $api['status'],
                'data' => $api['data'],
            ];
            $data = array(
                'header' => $header,
                'api' => $api,

            );
            $this->load->view('layout/v_app', $data);        
        } else if($idx == 'delete' && $id){
            $api = $this->users->delDataUsersHire($id);
            echo json_encode($api);
        }
	}

	function fired(){
        $header = array(
            'title' => 'Judul Page',
            'content' => 'users/fired/v_list',
        );
        $api = $this->users->getDataUsersFired();
        $api = [
        	'status' => $api['status'],
        	'data' => $api['data'],
        ];
        $data = array(
        	'header' => $header,
        	'api' => $api,

        );
        $this->load->view('layout/v_app', $data);
	}
}
