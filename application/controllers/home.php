<?php if (! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata');
		$data['biodata_array']=$this->biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->biodata->getBiodataQueryObject();
		$data['biodataBuilder_array']=$this->biodata->getBiodataBuilderArray();
		$data['biodataBuilder_object']=$this->biodata->getBiodataBuilderObject();
		$this->load->view('Data_message', $data);
	}

	
}
