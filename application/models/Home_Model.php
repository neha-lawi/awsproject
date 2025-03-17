<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {


    public function getData(){
        $this->db->select('*');
        $this->db->from('admin_master');
       return $this->db->get()->result();
    }

    public function insert(){
        $values = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'status' => 1,
        );

        $this->db->insert('admin_master',$values);
    }

    public function delete($id){
        $this->db->delete('admin_master',array('id' => $id));
    }

    public function activate($id){
        $this->db->set('status',1);
        $this->db->where('id',$id);
        $this->db->update('admin_master');
    }

    public function deactivate($id){
        $this->db->set('status',0);
        $this->db->where('id',$id);
        $this->db->update('admin_master');
    }

}
?>
