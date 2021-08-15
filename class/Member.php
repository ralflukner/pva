<?php

namespace Phppot;

class Member
{
    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

    function getMemberById($memberId)
    {
        $query = "SELECT * FROM `lmc_pta`.`users` WHERE id = ?";
        $paramType = "i";
        $paramArray = array($memberId);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    public function processLogin($username, $password) {
        


        $generated_key = openssl_pbkdf2($password, $salt, $keyLength, $iterations, 'sha512WithRSAEncryption');
        $generated_key_hex = bin2hex($generated_key);

    }

}