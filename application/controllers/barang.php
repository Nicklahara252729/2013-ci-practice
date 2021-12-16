<?php
class barang extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('model_barang'));
    }


    function index()
    {
        echo "barang";
    }
    
    
    function elektronik()
    {
        $data['title']="daftar barang elektronik";
        $data['list_barang']=  $this->model_barang->tampilkan_data();
        $this->load->view('barang/daftarbarang',$data);
    }
    
    function pakaian()
    {
        $data['title']="daftar pakaian wanita";
        $this->load->view('daftarbarang',$data);
    }
}
