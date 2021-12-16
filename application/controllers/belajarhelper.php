<?php
class belajarhelper extends ci_controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper('helperku');
        $this->load->library('mylib');
    }
    
    function index()
    {
        // contoh penggunaa library
        echo $this->mylib->sayHello();
        echo "<br>";
        // contoh penggunaan helper
        echo say_hello('nuris akbar');
    }
}
