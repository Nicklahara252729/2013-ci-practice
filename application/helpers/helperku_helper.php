<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('helperku'))
{
    
    function say_hello($nama)
    {
        return "hello <b>$nama</b> serukan belajar codeigniter";
    }
    
    
    function penjumlahan($nilai1,$nilai2)
    {
        return $nilai1+$nilai2;
    }
    
  
    
    function get_nama_barang($id)
    {
        $ci= & get_instance();
        $chek=$ci->db->get_where('barang',array('barang_id'=>$id));
        if($chek->num_rows()>0)
        {
            $record=$chek->row_array();
            return $record['nama_barang'];
        }
        else{
            return 'data tidak ditemukan';
        }
    }
}