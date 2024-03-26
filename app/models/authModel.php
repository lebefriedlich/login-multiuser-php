<?php

class authModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($data)
    {
        $query = "SELECT * FROM multiuser WHERE username = :username AND password = :password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $result = $this->db->single();

        return $result;
    }
}
