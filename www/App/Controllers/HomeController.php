<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        //  return true;
        switch ($action)
        {

            case "contact":
                return true;
            case "index":
                return true;
            case "main":
                return true;
            case "dubai":
                return true;
            default:
                return $this->app->getAuth()->isLogged();
        }
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function contact(): Response
    {
        return $this->html();
    }

    /**
     * Logout a user
     * @return \App\Core\Responses\ViewResponse
     */
    public function main(): Response
    {
        return $this->html();
    }

    public function dubai(): Response
    {
        return $this->html();
    }
}