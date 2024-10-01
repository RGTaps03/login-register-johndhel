<?php

class Customer
{
    private $cid;
    private $fullname;
    private $email;
    private $address;
    private $citycode;
    private $bday;
    private $password;
    private $phone;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->cid;
    }

    public function setId($id)
    {
        $this->cid = $id;
    }

    public function getFullName()
    {
        return $this->fullname;
    }

    public function setFullName($fullName)
    {
        $this->fullname = $fullName;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCitycode()
    {
        return $this->citycode;
    }

    public function setCitycode($citycode)
    {
        $this->citycode = $citycode;
    }

    public function getBday()
    {
        return $this->bday;
    }

    public function setBday($bday)
    {
        $this->bday = $bday;
    }

    

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $this->password = $hashed_password;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
