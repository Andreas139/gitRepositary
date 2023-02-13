<?php

namespace App\Models;

use App\Core\Model;

class rezervacie_zajazdy extends Model
{
    protected $klienti_id_klienta;
    protected $zajazdy_id_zajazdu;
    protected $zajazdy_id_destinacie;
    protected $id_rezervacie;

    protected $datumRezervacie;
    protected $pocetOsob;
    protected $stavRezervacie;
    protected $nazovZajazdu;
    protected $popisZajazdu;
    protected $cenaZajazdu;
    protected $pocetVolnychMiest;
    protected $datumOdchodu;
    protected $datumPrichodu;



    static public function getOneById($value): array
    {
        self::connect();
        try {
            $sql = "SELECT rezervacie.klienti_id_klienta, rezervacie.zajazdy_id_zajazdu,
       rezervacie.zajazdy_id_destinacie,rezervacie.id_rezervacie,rezervacie.datumRezervacie,
       rezervacie.pocetOsob,rezervacie.stavRezervacie,zajazdy.nazovZajazdu,zajazdy.popisZajazdu,
       zajazdy.cenaZajazdu,zajazdy.pocetVolnychMiest,zajazdy.datumOdchodu, zajazdy.datumPrichodu FROM rezervacie
           
           LEFT JOIN zajazdy ON zajazdy.id_zajazdu=rezervacie.zajazdy_id_zajazdu WHERE klienti_id_klienta=?";
            // echo $sql;
            $stmt = self::$connection->prepare($sql);
            $stmt->execute([$value]);
            $models = $stmt->fetchAll();
            //var_dump($models);
            return $models;
        } catch (PDOException $e) {
            throw new \Exception('Query failed: ' . $e->getMessage(), 0, $e);
        }
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