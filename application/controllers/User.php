<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        
    
	public function index()
	{
            $this->load->model('m_plans');
            $this->load->model('m_testimonials');
            
            $data['plan_details'] = $this->m_plans->get_rows();
            $data['testi_details'] = $this->m_testimonials->get_rows();
            
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer',$data);
	}
	public function thankyou()
	{
		$this->load->view('header-inner');
		$this->load->view('thankyou');
		$this->load->view('footer-inner');
	}
	public function subscription()
	{
		$this->load->view('header-inner');
		$this->load->view('subscription');
		$this->load->view('footer-inner');
	}
}
