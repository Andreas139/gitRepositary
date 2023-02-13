<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\klienti;
use App\Models\Like;
use App\Models\rezervacie;
use App\Models\rezervacie_zajazdy;
use App\Models\zajazdy;
use App\Models\ZapZajazdy;


class PostsController extends AControllerBase
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
            case "delete":
            case "create":
            case "store":
            case "edit":
            case "like":
                return $this->app->getAuth()->isLogged();

        }
        return true;
    }

    public function index(): Response
    {
        // TODO: Implement index() method.
        $zajazdy = zajazdy::getAll();
        return $this->html($zajazdy);
    }

    public function list(): Response
    {
        $auth = $this->app->getAuth();
        $id = $auth->getLoggedUserId();
        //echo "id=".$id;
        //echo "user=".$auth->getLoggedUserName();
        $rz = rezervacie_zajazdy::getOneById($id);
        return $this->html($rz);
    }

    public function delete(){
        $id = $this->request()->getValue('id');
        $postToDelete = zajazdy::getOne($id);
        if ($postToDelete) {
            $postToDelete->delete();
        }
         return $this->redirect("?c=posts");
    }

    public function store(){
        $id = $this->request()->getValue('id');
        $post = ($id ? zajazdy::getOne($id) : new zajazdy());
        $post->setPopisZajazdu($this->request()->getValue('text'));
        $post->save();

        return $this->redirect('?c=posts');

    }
    public function storeText(){

        $id = $this->request()->getValue('id');
        $post = ($id ? zajazdy::getOne($id) : new zajazdy());

        $post->setPouzivatel($this->request()->getValue('pouzivatel'));
        $post->setNazovZajazdu($this->request()->getValue('nazovZajazdu'));
        
        $post->save();
        return $this->redirect('?c=posts');


        /*
        $klienti;
        if ($login == $klienti->getOneByLogin($login)->getLogin()) {

        $logged = $this->app->getAuth()->login($formData['login'], $formData['password'],$klienti);
        */
    }

    public function ulozZajazd(){


        $nazovZajazdu = $this->request()->getValue('nazovZajazdu');
        echo $nazovZajazdu;
         $login = $this->app->getAuth()->getLoggedUserName();
        echo $login;
        $zajazdy = new zajazdy();

        $klienti = new klienti();
        $klient = $klienti->getOneByColumnName("login",$login);

        $zajazdy = $zajazdy->getOneByColumnName("nazovZajazdu",$nazovZajazdu);
        if ($zajazdy != null){
           echo $zajazdy->getPopisZajazdu();

           $rezervacie = new rezervacie();
           $rezervacie->setKlientiIdKlienta($klient->getId());
           $rezervacie->setZajazdyIdZajazdu($zajazdy->getIdZajazdu());
           $rezervacie->setZajazdyIdDestinacie($zajazdy->getDestinacieIdDestinacie());

            $str1 = (string) $klient->getId();
            $str2 = (string) $zajazdy->getDestinacieIdDestinacie();
            $c = $str2.$str1;
            $d = (int) $c;
           $rezervacie->setIdRezervacie( $d);


            $formData = [
                'klienti_id_klienta' => $rezervacie->getKlientiIdKlienta(),
                'zajazdy_id_zajazdu' => $rezervacie->getZajazdyIdZajazdu(),
                'zajazdy_id_destinacie' => $rezervacie->getZajazdyIdDestinacie(),
                'id_rezervacie' => $rezervacie->getIdRezervacie(),
                'datumRezervacie' => $rezervacie->getDatumRezervacie(),
                'pocetOsob' => $rezervacie->getPocetOsob(),
                'stavRezervacie' => $rezervacie->getStarRezervacie(),
            ];

            // $klient->saveUser();
            //$klienti->save();
            //echo $klienti->getId();

           $rezv = $rezervacie->getOneByTwo($rezervacie->getKlientiIdKlienta(),$rezervacie->getZajazdyIdZajazdu());
            if($rezv != null){

                return $this->redirect('?c=posts&e=duplicita');
            }else{

                $rezervacie->insertFromForm($formData);
                return $this->redirect('?c=posts&a=list');
            }


            //$rezervacie->save();

        }


        /*
        $klienti;
        if ($login == $klienti->getOneByLogin($login)->getLogin()) {

        $logged = $this->app->getAuth()->login($formData['login'], $formData['password'],$klienti);
        */
    }


    public function duplicita(){


        // return $this->html(new zajazdy(),viewName:  'create.form');
    }



    public function create(){
        return $this->html(new zajazdy(),viewName:  'create.form');
    }


    public function edit(){
        $id = $this->request()->getValue('id');
        $postToEdit = zajazdy::getOne($id);
        return $this->html($postToEdit,viewName: 'create.form');

    }

    public function like(){
        $id = $this->request()->getValue('id');
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


    }

    /*  public function index()
        {
            $posts = zajazdy::getAll();
            return $this->html($posts);
        }
    */
}