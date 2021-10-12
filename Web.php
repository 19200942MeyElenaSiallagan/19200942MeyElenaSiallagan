<?php
defined("BASEPATH") or exit ("no direct script access allowed");

class web extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function about() {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }

    public function login() {
        $data['judul'] = "Halaman Login";
        $this->load->view('v_header', $data);
        $this->load->view('v_login', $data);
        $this->load->view('v_footer', $data);
    }

    public function registration() {
        $data['judul'] = "Halaman Registrasi";
        $this->load->view('v_header',$data);
        $this->load->view('v_registration',$data);
        $this->load->view('v_footer',$data);
    }

}