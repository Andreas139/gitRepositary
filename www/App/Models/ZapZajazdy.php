<?php

namespace App\Models;

use App\Core\Model;

class ZapZajazdy extends Model
{
    protected $id_zajazdu;
    protected $pouzivatel;

    /**
     * @return mixed
     */
    public function getIdZajazdu()
    {
        return $this->id_zajazdu;
    }

    /**
     * @param mixed $id_zajazdu
     */
    public function setIdZajazdu($id_zajazdu): void
    {
        $this->id_zajazdu = $id_zajazdu;
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


}