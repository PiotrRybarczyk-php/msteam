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
	public function work()
	{
		$data = loadDefaultDataFront();
		echo loadViewsFront('work', $data);
	}
	public function blog()
	{
		$data = loadDefaultDataFront();
		echo loadViewsFront('blog', $data);
	}
	public function single_article($id, $slug)
	{
		$data = loadDefaultDataFront();
		echo loadViewsFront('single_article', $data);
	}
	public function about()
	{
		$data = loadDefaultDataFront();
		echo loadViewsFront('about', $data);
	}
	public function contact()
	{
		$data = loadDefaultDataFront();
		echo loadViewsFront('contact', $data);
	}
}
