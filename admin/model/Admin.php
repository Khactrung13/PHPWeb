<?php
class Admin
{
  public $id_admin;
  public $username;
  public $password;
 

  public function __construct($id_admin, $username,$password)
  {
    $this->id_admin = $id_admin;
    $this->username = $username;
    $this->password = $password;
  }
  

  public function getId_admin()
  {
    return $this->id_admin;
  }

  public function setId_admin($id_admin)
  {
    $this->id_admin = $id_admin;
  }

  public function getusername()
  {
    return $this->username;
  }

  public function setusername($username)
  {
    $this->username = $username;
  }
  public function getpassword()
  {
    return $this->password;
  }

  public function setpassword($password)
  {
    $this->password = $password;
  }
}