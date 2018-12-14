<?php
/**
 * Created by PhpStorm.
 * User: Pauessa
 * Date: 14/12/2018
 * Time: 11:50
 */

require_once 'database/IEntity.php';

class Cine implements IEntity
{
    /**
     * @var int
     */
    private $id_Cine;
    private $nombre_Cine;
    private $direcion_Cine;
    private $municipio_Cine;

    /**
     * Cine constructor.
     * @param $id_Cine
     * @param $nombre_Cine
     * @param $direcion_Cine
     * @param $municipio_Cine
     */
    public function __construct( $nombre_Cine='', $direcion_Cine='', $municipio_Cine='')
    {
        $this->id_Cine = null;
        $this->nombre_Cine = $nombre_Cine;
        $this->direcion_Cine = $direcion_Cine;
        $this->municipio_Cine = $municipio_Cine;
    }

    /**
     * @return int
     */
    public function getIdCine()
    {
        return $this->id_Cine;
    }

    /**
     * @param null $id_Cine
     * @return Cine
     */
    public function setIdCine($id_Cine)
    {
        $this->id_Cine = $id_Cine;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombreCine(): string
    {
        return $this->nombre_Cine;
    }

    /**
     * @param string $nombre_Cine
     * @return Cine
     */
    public function setNombreCine(string $nombre_Cine): Cine
    {
        $this->nombre_Cine = $nombre_Cine;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirecionCine(): string
    {
        return $this->direcion_Cine;
    }

    /**
     * @param string $direcion_Cine
     * @return Cine
     */
    public function setDirecionCine(string $direcion_Cine): Cine
    {
        $this->direcion_Cine = $direcion_Cine;
        return $this;
    }

    /**
     * @return string
     */
    public function getMunicipioCine(): string
    {
        return $this->municipio_Cine;
    }

    /**
     * @param string $municipio_Cine
     * @return Cine
     */
    public function setMunicipioCine(string $municipio_Cine): Cine
    {
        $this->municipio_Cine = $municipio_Cine;
        return $this;
    }


    public function toArray(): array
    {
      return[
          'id_Cine'=>$this->id_Cine,
          'nombre_Cine'=>$this->nombre_Cine,
          'direcion_Cine'=>$this->direcion_Cine,
          'municipio_Cine'=>$this->municipio_Cine
      ];

    }
}