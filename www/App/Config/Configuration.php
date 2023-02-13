<?php

namespace App\Config;

use App\Auth\DummyAuthenticator;
use App\Auth\LoginAuthenticator;

/**
 * Class Configuration
 * Main configuration for the application
 * @package App\Config
 */
class Configuration
{
    public const APP_NAME = 'Vaííčko MVC FW';
    public const FW_VERSION = '2.0';

    public const DB_HOST = '127.0.0.1:3307';  // change to db, if docker you use docker
    public const DB_NAME = 'cestovka';
    public const DB_USER = 'cestovka'; // change to vaiicko_user, if docker you use docker
    public const DB_PASS = 'password';

  public const LOGIN_URL = '?c=auth&a=login';
    public const DEFAULT_URL = '?c=home&a=main';

//  public const LOGIN_URL = '?c=home&a=main';
// public const LOGIN_URL = '?c=auth&a=login';

    public const ROOT_LAYOUT = 'root';
//public const ROOT_LAYOUT = 'home';

    public const DEBUG_QUERY = false;

    public const AUTH_CLASS = LoginAuthenticator::class;
 //public const AUTH_CLASS = DummyAuthenticator::class;
}