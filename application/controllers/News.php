<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	public function index()
	{
		$tes = 'Ini berita news ...';
		$data['kabar'] = $tes;
		$this->load->view('News_message',$data);
	}
}
