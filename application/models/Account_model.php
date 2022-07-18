<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Account_model extends CI_Model {
 
    //     public function __construct()
    // {
    //     parent::__construct();
    // }

        function daftar($data)
        {
        $this->db->insert('user', $data);
        }

    //Start: method tambahan untuk reset code  
    public function getUserInfo($id)
    {
        $q = $this->db->get_where('user', array('id_user' => $id), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        } else {
            error_log('no user found getUserInfo(' . $id . ')');
            return false;
        }
    }

    public function getUserInfoByEmail($email)
    {
        $q = $this->db->get_where('user', array('email' => $email), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        }
    }

    public function insertToken($user_id)
    {
        $token = substr(sha1(rand()), 0, 30);
        $date = date('Y-m-d');

        $string = array(
            'token' => $token,
            'id_user' => $id_user,
            'created' => $date
        );
        $query = $this->db->insert_string('tokens', $string);
        $this->db->query($query);
        return $token . $id_user;
    }

    public function isTokenValid($token)
    {
        $tkn = substr($token, 0, 30);
        $uid = substr($token, 30);

        $q = $this->db->get_where('tokens', array(
            'tokens.token' => $tkn,
            'tokens.id_user' => $uid
        ), 1);

        if ($this->db->affected_rows() > 0) {
            $row = $q->row();

            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d');
            $todayTS = strtotime($today);

            if ($createdTS != $todayTS) {
                return false;
            }

            $user_info = $this->getUserInfo($row->user_id);
            return $user_info;
        } else {
            return false;
        }
    }

    public function updatePassword($post)
    {
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', array('password' => $post['password']));
        return true;
    }
    //End: method tambahan untuk reset code  
}
?>