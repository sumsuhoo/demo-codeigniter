<?php

class User_model extends CI_Model {

    var $username   = '';
    var $password = '';
    var $email    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_user_details($id)
    {
        $query = $this->db->get_where('users',array('id'=>$id));
        return $query->result_array();
    }

    function get_all_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    function get_last_ten_users()
    {
        $query = $this->db->get('users', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->username  = $_POST['username']; // please read the below note
        $this->password  = $_POST['password'];
        $this->email     = $_POST['email'];

        $this->db->insert('users', $this);
    }

    function update_entry()
    {
        $this->username  = $_POST['username']; // please read the below note
        $this->password  = $_POST['password'];
        $this->email     = $_POST['email'];

        $this->db->update('users', $this, array('id' => $_POST['id']));
    }

}
?>