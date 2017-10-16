<?php
// This file is developed by Leah Fuentes

/**
 * LKD authenticatefolder
 *
 * @package    core
 * @copyright  2017 leahfuentes.kd@gmail.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    /**
     * Index Page for this Controller
     * */
     public function index(){
         $data['page_title'] = 'Login';
         $data['page_css'] = 'login';
         
         #material_design Components
         $data['material_com'] = array('card');
         
         $this->load->view('head', $data);
         $this->load->view('authenticate/login');
     }
    
}