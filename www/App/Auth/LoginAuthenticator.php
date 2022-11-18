<?php

namespace App\Auth;

class LoginAuthenticator extends DummyAuthenticator
{
    function login($login, $password): bool
    {

        if ($login == $password) {
            $_SESSION['user'] = $login;
            return true;
        } else {
            return false;
        }
    }

}