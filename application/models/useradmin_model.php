<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Useradmin_model extends CI_Model {
    
    /*need functions to add
     * delete, and update.
     */
    
    function addUserToDB($form_data1,$form_data2){
        $this->load->database('woodstoc_vetgroup1');
        
        $this->db->trans_start();
        $this->db->insert('user_t',$form_data1);
        $this->db->insert('staff_t',$form_data2);
        $this->db->trans_complete();   

    }
    
}
?>
