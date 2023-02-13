<?php

namespace App\Models;

use App\Core\Model;

class rezervacie extends Model
{
    protected $klienti_id_klienta;
    protected $zajazdy_id_zajazdu;
    protected $zajazdy_id_destinacie;
    protected $id_rezervacie;
    protected $datumRezervacie;
    protected $pocetOsob;
    protected $cena;
    protected $stavRezervacie;


    public static function getPkColumnName() : string
    {
        return 'klienti_id_klienta';
    }

    /**
     * @return mixed
     */
    public function getStavRezervacie()
    {
        return $this->stavRezervacie;
    }

    /**
     * @param mixed $stavRezervacie
     */
    public function setStavRezervacie($stavRezervacie): void
    {
        $this->stavRezervacie = $stavRezervacie;
    }

    /**
     * @return mixed
     */
    public function getKlientiIdKlienta()
    {
        return $this->klienti_id_klienta;
    }

    /**
     * @param mixed $klienti_id_klienta
     */
    public function setKlientiIdKlienta($klienti_id_klienta): void
    {
        $this->klienti_id_klienta = $klienti_id_klienta;
    }

    /**
     * @return mixed
     */
    public function getZajazdyIdZajazdu()
    {
        return $this->zajazdy_id_zajazdu;
    }

    /**
     * @param mixed $zajazdy_id_zajazdu
     */
    public function setZajazdyIdZajazdu($zajazdy_id_zajazdu): void
    {
        $this->zajazdy_id_zajazdu = $zajazdy_id_zajazdu;
    }

    /**
     * @return mixed
     */
    public function getZajazdyIdDestinacie()
    {
        return $this->zajazdy_id_destinacie;
    }

    /**
     * @param mixed $zajazdy_id_destinacie
     */
    public function setZajazdyIdDestinacie($zajazdy_id_destinacie): void
    {
        $this->zajazdy_id_destinacie = $zajazdy_id_destinacie;
    }

    /**
     * @return mixed
     */
    public function getIdRezervacie()
    {
        return $this->id_rezervacie;
    }

    /**
     * @param mixed $id_rezervacie
     */
    public function setIdRezervacie($id_rezervacie): void
    {
        $this->id_rezervacie = $id_rezervacie;
    }

    /**
     * @return mixed
     */
    public function getDatumRezervacie()
    {
        return $this->datumRezervacie;
    }

    /**
     * @param mixed $datumRezervacie
     */
    public function setDatumRezervacie($datumRezervacie): void
    {
        $this->datumRezervacie = $datumRezervacie;
    }

    /**
     * @return mixed
     */
    public function getPocetOsob()
    {
        return $this->pocetOsob;
    }

    /**
     * @param mixed $pocetOsob
     */
    public function setPocetOsob($pocetOsob): void
    {
        $this->pocetOsob = $pocetOsob;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @param mixed $cena
     */
    public function setCena($cena): void
    {
        $this->cena = $cena;
    }

    /**
     * @return mixed
     */
    public function getStarRezervacie()
    {
        return $this->starRezervacie;
    }

    /**
     * @param mixed $starRezervacie
     */
    public function setStarRezervacie($starRezervacie): void
    {
        $this->starRezervacie = $starRezervacie;
    }



}