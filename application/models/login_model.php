<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
    function __construct()
    {
        // Calling the Model Constructor
        parent::__construct();
    }

    //We get the username and password from the databse table
    function get_user($usr, $pwd)
    {
        $sql = "select * from users where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'active'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}