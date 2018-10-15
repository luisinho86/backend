<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ecommerce/orders_model');

		/*$this->config->load('esdemarca/marketplaces/cdiscount_config');
		$this->load->model('marketplaces/cdiscount_model');
		$this->load->library('marketplaces/cdiscount_api');
		$this->load->model('platforms_model');*/
	}

	function index()
	{
		$this->load->view('ecommerce/orders/list');
	}
}