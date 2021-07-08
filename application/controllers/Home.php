<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->db->table_exists('users')) {
			$this->base_m->create_base();
		}
	}

	public function change($lang)
	{
		$_SESSION['lang'] = $lang;
	}

	public function index()
	{
		$data = loadDefaultDataFront();
		echo loadViewsFront('index', $data);
	}
	public function contact()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['contacts'] = $this->back_m->get_all('distribs');
		echo loadViewsFront('contact', $data);
	}
	public function catalog()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		echo loadViewsFront('catalog', $data);
	}
	public function certificates()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		echo loadViewsFront('certificates', $data);
	}
	public function certificates_old()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['certificate'] = $this->back_m->get_all('certificates');
		$data['type'] = "archive";
		echo loadViewsFront('certificates_subpage', $data);
	}
	public function certificates_new()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['certificate'] = $this->back_m->get_all('certificates');
		$data['type'] = "current";
		echo loadViewsFront('certificates_subpage', $data);
	}
}
