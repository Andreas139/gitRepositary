<?php

namespace App\Models;

use App\Core\Model;

class zajazdy extends Model
{
    protected $id_zajazdu;
    protected $destinacie_id_destinacie;
    protected $nazovZajazdu;
    protected $popisZajazdu;
    protected $dlzkaZajazdu;
    protected $nazovDestinacie;
    protected $cenaZajazdu;
    protected $pocetVolnychMiest;
    protected $datumOdchodu;
    protected $datumPrichodu;
    protected $hotel;

    /**
     * @return mixed
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param mixed $hotel
     */
    public function setHotel($hotel): void
    {
        $this->hotel = $hotel;
    }


    /**
     * Return default primary key column name
     * @return string
     */
    public static function getPkColumnName() : string
    {
        return 'id_zajazdu';
    }
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
    public function getDestinacieIdDestinacie()
    {
        return $this->destinacie_id_destinacie;
    }

    /**
     * @param mixed $destinacie_id_destinacie
     */
    public function setDestinacieIdDestinacie($destinacie_id_destinacie): void
    {
        $this->destinacie_id_destinacie = $destinacie_id_destinacie;
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

    /**
     * @return mixed
     */
    public function getPopisZajazdu()
    {
        return $this->popisZajazdu;
    }

    /**
     * @param mixed $popisZajazdu
     */
    public function setPopisZajazdu($popisZajazdu): void
    {
        $this->popisZajazdu = $popisZajazdu;
    }

    /**
     * @return mixed
     */
    public function getDlzkaZajazdu()
    {
        return $this->dlzkaZajazdu;
    }

    /**
     * @param mixed $dlzkaZajazdu
     */
    public function setDlzkaZajazdu($dlzkaZajazdu): void
    {
        $this->dlzkaZajazdu = $dlzkaZajazdu;
    }

    /**
     * @return mixed
     */
    public function getNazovDestinacie()
    {
        return $this->nazovDestinacie;
    }

    /**
     * @param mixed $nazovDestinacie
     */
    public function setNazovDestinacie($nazovDestinacie): void
    {
        $this->nazovDestinacie = $nazovDestinacie;
    }

    /**
     * @return mixed
     */
    public function getCenaZajazdu()
    {
        return $this->cenaZajazdu;
    }

    /**
     * @param mixed $cenaZajazdu
     */
    public function setCenaZajazdu($cenaZajazdu): void
    {
        $this->cenaZajazdu = $cenaZajazdu;
    }

    /**
     * @return mixed
     */
    public function getPocetVolnychMiest()
    {
        return $this->pocetVolnychMiest;
    }

    /**
     * @param mixed $pocetVolnychMiest
     */
    public function setPocetVolnychMiest($pocetVolnychMiest): void
    {
        $this->pocetVolnychMiest = $pocetVolnychMiest;
    }

    /**
     * @return mixed
     */
    public function getDatumOdchodu()
    {
        return $this->datumOdchodu;
    }

    /**
     * @param mixed $datumOdchodu
     */
    public function setDatumOdchodu($datumOdchodu): void
    {
        $this->datumOdchodu = $datumOdchodu;
    }

    /**
     * @return mixed
     */
    public function getDatumPrichodu()
    {
        return $this->datumPrichodu;
    }

    /**
     * @param mixed $datumPrichodu
     */
    public function setDatumPrichodu($datumPrichodu): void
    {
        $this->datumPrichodu = $datumPrichodu;
    }


}