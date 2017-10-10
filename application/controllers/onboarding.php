<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class onboarding extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();

        //Pagination library
        $this->load->library('pagination');

        //onboarding_model
        $this->load->model('onboarding_model');

    }

    public function index()
    {
        //pagination
        $config['base_url'] = site_url('onboarding/index');
        $config['total_rows'] = $this->db->count_all('user_stats');
        $config['per_page'] = "5";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //Bootstrap Pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //Get the onboarding data
        $data['onboardinglist'] = $this->onboarding_model->get_onboarding_list($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();

        //onboarding_view
        $this->load->view('layout/header');
        $this->load->view('onboarding_view',$data);
        $this->load->view('layout/footer');
    }
}