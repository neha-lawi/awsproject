<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->Model('Home_Model');
    }

    public function index(){
    $data['title'] = "AWS PROJECT";
    $data['infos'] = $this->Home_Model->getData();
    $this->load->view('home',$data);
    }

    public function store(){
        if(!empty($this->input->post())){
        $this->Home_Model->insert();
       redirect(URL);
    }
    }

    public function deleteRow($id){
      $this->Home_Model->delete($id);
      redirect(URL);
    
    }

    public function about(){
      $data['title'] = "AWS PROJECT | About Us";
      $data['infos'] = $this->Home_Model->getData();
      $this->load->view('about',$data);
      }

    public function active($id){
        $this->Home_Model->activate($id);
        redirect(URL);
      
      }

      public function inactive($id){
        $this->Home_Model->deactivate($id);
        redirect(URL);
      
      }


}
?>
