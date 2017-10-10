<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class onboarding_model extends CI_Model{
    function __construct()
    {
        // Model constructor
        parent::__construct();
    }

    //read the data from db
    function get_onboarding_list()
    {
        //group the onboarding_percentage results to know how many people in each percentage
        $sql = 'select onboarding_percentage, COUNT(onboarding_percentage) AS count from user_stats group by onboarding_percentage';
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}