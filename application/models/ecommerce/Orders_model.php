<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_model extends CI_Model
{
	public function __construct()
	{
		/*$this->prefix = $this->config->item('table_prefix');
		$this->id_platform = $this->config->item('id_platform');*/
		parent::__construct();
	}
}