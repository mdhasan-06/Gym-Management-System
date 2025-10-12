<?php
    require_once("../model/usersdb.php");

    function validateUser($name, $pass)
    {
        return validateUsers($name, $pass);
    }

?>