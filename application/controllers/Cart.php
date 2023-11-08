<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
    }

    public function index()
    {

    }

    
}

/* End of file Cart.php and path \application\controllers\Cart.php */
