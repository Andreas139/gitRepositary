<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\klienti;
use App\Models\Like;
use App\Models\zajazdy;

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

    function doHash($login,$password): string
    {
        $salt = strrev($login);
        $hash = hash("sha256", $salt . $password);

        return $hash;
    }



    /**
     * Logout a user
     * @return \App\Core\Responses\ViewResponse
     */

    public function re()
    {
        return $this->html();
        //return $this->redirect('?c=register&a=register');
    }


    public function register(){


        /*
        $postToLike = zajazdy::getOne($id);

        foreach ( $postToLike->getLikes() as $like) {
            if ($like->getUser() == $this->app->getAuth()->getLoggedUserName()){
                $like->delete();
                return $this->redirect('?c=posts');
            }
        }

        $newLike = new Like();
        $newLike->setUser( $this->app->getAuth()->getLoggedUserName());
        $newLike->setPostId($id);
        $newLike->save();
        return $this->redirect('?c=posts');
    */

        $klienti = new klienti();

        $result = $this->doHash($this->request()->getValue('pouzivatelskeMeno'), $this->request()->getValue('heslo'));

        $klienti->setMeno($this->request()->getValue('meno'));
        $klienti->setPriezvisko($this->request()->getValue('priezvisko'));
        $klienti->setHeslo($result);
        $klienti->setLogin($this->request()->getValue('pouzivatelskeMeno'));
        $klienti->setEmail($this->request()->getValue('email'));




        $formData = [
            'meno' => $klienti->getMeno(),
            'priezvisko' => $klienti->getPriezvisko(),
            'login' => $klienti->getLogin(),
            'heslo' => $klienti->getHeslo(),
            'email' => $klienti->getEmail(),
        ];

       // $klient->saveUser();
        //$klienti->save();
        //echo $klienti->getId();

        $klienti->insertFromForm($formData);
         return $this->redirect('?c=auth&a=login');

    }




}