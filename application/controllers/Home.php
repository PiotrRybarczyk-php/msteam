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
		$data['logo'] = $this->back_m->get_all('logos');
		$data['slider'] = $this->back_m->get_all('slider');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('index', $data);
	}
	public function offers()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('offers', $data);
	}
	public function single_offer($id, $slug)
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('single_offer', $data);
	}
	public function reals()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('reals', $data);
	}
	public function work()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('work', $data);
	}
	public function blog()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('blog', $data);
	}
	public function single_article($id, $slug)
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('single_article', $data);
	}
	public function about()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('about', $data);
	}
	public function contact()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('contact', $data);
	}
}
