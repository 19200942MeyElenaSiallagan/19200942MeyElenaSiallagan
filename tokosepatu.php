<?php
class tokosepatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tokosepatu_model');
    }
    public function index()
    {
        $this->load->view('v_input');
    }
    public function cetak()
    {
      $data =[
        'nama'=> $this->input->post('nama'),
        'nohp'=> $this->input->post('nohp'),
        'merk'=> $this->input->post('merk'),
        'ukuran'=> $this->input->post('ukuran'),
        'harga' => $this->tokosepatu_model->proses($this->input->post('merk'))
    ];
    $this->load->view('v_output', $data);  
    }
}








 