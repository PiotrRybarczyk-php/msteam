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
		if (!isset($_SESSION['lang'])) {
			$_SESSION['lang'] = 'pl';
		}
	}

	public function change($lang)
	{
		$_SESSION['lang'] = $lang;
	}

	public function index()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['slider'] = $this->back_m->get_all('slider');
		$data['info'] = $this->back_m->get_all('info');
		$data['offer'] = $this->back_m->get_all('services');
		$data['work'] = $this->back_m->get_one_work();
		$data['tile'] = $this->back_m->get_all('tiles');
		$data['update'] = $this->back_m->get_one_article_main();
		$data['project'] = $this->back_m->get_all('mainprojects');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('index', $data);
	}
	public function offers()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 3);
		$data['service'] = $this->back_m->get_all('services');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('offers', $data);
	}
	public function offer_1()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 8);
		$data['offer'] = $this->back_m->get_all('offer_1');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('single_offer', $data);
	}
	public function offer_2()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 9);
		$data['offer'] = $this->back_m->get_all('offer_2');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('single_offer', $data);
	}
	public function offer_3()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 10);
		$data['offer'] = $this->back_m->get_all('offer_3');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('single_offer', $data);
	}
	public function reals()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 4);
		$data['project'] = $this->back_m->get_with_limit('projects', 3, 'asc');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('reals', $data);
	}
	public function real_1()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 11);
		$data['cp'] = $this->uri->segment(1);
		$data['picture'] = $this->back_m->get_images('gallery', 'projects', '1');
		echo loadViewsFront('single_project', $data);
	}
	public function real_2()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 12);
		$data['cp'] = $this->uri->segment(1);
		$data['picture'] = $this->back_m->get_images('gallery', 'projects', '2');
		echo loadViewsFront('single_project', $data);
	}
	public function real_3()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 13);
		$data['cp'] = $this->uri->segment(1);
		$data['picture'] = $this->back_m->get_images('gallery', 'projects', '3');
		echo loadViewsFront('single_project', $data);
	}
	public function work()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 5);
		$data['work'] = $this->back_m->get_with_limit('work', 10, 'desc');
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('work', $data);
	}
	public function blog()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 7);
		$data['blog'] = $this->back_m->get_with_limit('blog', 10, 'desc');
		$data['about'] = $this->back_m->get_one('aboutus', 3);
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('blog', $data);
	}
	public function single_article($id, $slug)
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 7);
		$data['cp'] = $this->uri->segment(1);
		$data['blog'] = $this->back_m->get_one('blog', $id);
		echo loadViewsFront('single_article', $data);
	}
	public function about()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 2);
		$data['update'] = $this->back_m->get_one_article_about();
		$data['about'] = $this->back_m->get_one('aboutus', 1);
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('about', $data);
	}
	public function contact()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 6);
		$data['about'] = $this->back_m->get_one('aboutus', 2);
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('contact', $data);
	}
	public function contact_old()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_one('logos', 1);
		$data['banner'] = $this->back_m->get_one('logos', 6);
		$data['about'] = $this->back_m->get_one('aboutus', 2);
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('contactold', $data);
	}
}
