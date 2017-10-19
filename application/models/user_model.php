<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
  public $id;
  public $name;
  public $age;

  public function __construct(){
    parent::__construct();
  }

  public function get_users(){
    $query = $this->db->get('user');
    return $query->result();
  }

}
