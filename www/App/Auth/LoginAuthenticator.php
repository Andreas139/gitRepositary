<?php

namespace App\Auth;

use App\Models\klienti;

class LoginAuthenticator extends DummyAuthenticator
{

    public function __construct()
    {
        session_start();
    }

    function doHash($login,$password): string
    {
        $salt = strrev($login);
        $hash = hash("sha256", $salt . $password);

        return $hash;
    }

    function login($login, $password, $klienti): bool
    {
        $klient =  $klienti->getOneByColumnName("login",$login);
        if ($klient == null){
            return false;
        }
        $h = $this->doHash($login, $password);
        /*
        echo $login;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $h;
        echo "<br>";
        echo $klient->getHeslo();
        echo "<br>";
        */
                if ($h == $klient->getHeslo()) {
                    $_SESSION["user"] = $login;
                    $_SESSION["id"] = $klient->getId();
                    return true;
                }

            return false;
    }

    function logout() : void
    {
        if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);
            unset($_SESSION["id"]);
            session_destroy();
        }
    }

    function isLogged(): bool
    {
        return isset($_SESSION['user']) && $_SESSION['user'] != null;
    }

    function getLoggedUserId(): mixed
    {
        return isset($_SESSION['id']) ? $_SESSION['id'] : throw new \Exception("User not logged in");
    }


    function getLoggedUserName(): string
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : throw new \Exception("User not logged in");
    }
}