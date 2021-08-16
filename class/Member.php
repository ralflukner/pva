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
        $query = "SELECT * FROM `lmc_pta`.`users` WHERE name = $username";
        $userResult = $this->ds->query($query);

        $userID = NULL;
        $pw_iterations = "INITIALIZED";
        $pw_salt = "INITIALIZED";
        $pw_key_size = "INITIALIZED";
        $pw_hash = "INITIALIZED";

        if ($userResult->num_rows > 0) {
            // retrieve pw_iterations, pw_salt, pw_key_size, pw_hash
            $row = $userResult->fetch_assoc();

            $userID = $row['id'];
            $pw_iterations = $row['pw_iterations'];
            $pw_salt = $row['pw_salt'];
            $pw_key_size = $row['pw_key_size'];
            $pw_hash = $row['pw_hash'];
        }
        $generated_key = openssl_pbkdf2($password, $pw_salt, $pw_key_size, $pw_iterations,
            'sha512WithRSAEncryption');
        $generated_key_hex = bin2hex($generated_key);

        if($generated_key_hex === $pw_hash) {
            $_SESSION["userID"] = $userID;
            return true;
        } else {
            $_SESSION["userID"] = "";
            return false;
        }

    }

}