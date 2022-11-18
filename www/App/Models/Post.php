<?php

namespace App\Models;

use App\Core\Model;

class Post extends Model
{
    protected $id;
    protected $pouzivatel;
    protected $nazovZajazdu;
    protected $poznamka;

    /**
     * @return mixed
     */
    public function getPoznamka()
    {
        return $this->poznamka;
    }

    /**
     * @param mixed $poznamka
     */
    public function setPoznamka($poznamka): void
    {
        $this->poznamka = $poznamka;
    }

    public function getLikes(){
        return Like::getAll('post_id = ?', [$this->getId()]);
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPouzivatel()
    {
        return $this->pouzivatel;
    }

    /**
     * @param mixed $pouzivatel
     */
    public function setPouzivatel($pouzivatel): void
    {
        $this->pouzivatel = $pouzivatel;
    }

    /**
     * @return mixed
     */
    public function getNazovZajazdu()
    {
        return $this->nazovZajazdu;
    }

    /**
     * @param mixed $nazovZajazdu
     */
    public function setNazovZajazdu($nazovZajazdu): void
    {
        $this->nazovZajazdu = $nazovZajazdu;
    }



}