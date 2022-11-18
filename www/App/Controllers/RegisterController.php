<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;

class RegisterController extends AControllerBase
{

    /**
     *
     * @return \App\Core\Responses\RedirectResponse|\App\Core\Responses\Response
     */
    public function index(): Response
    {
        return $this->html();
    }





    /**
     * Logout a user
     * @return \App\Core\Responses\ViewResponse
     */

    public function re(): Response
    {
        return $this->html();
        //return $this->redirect('?c=register&a=register');
    }

}