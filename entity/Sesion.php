<?php
/**
 * Created by PhpStorm.
 * User: Pauessa
 * Date: 14/12/2018
 * Time: 11:50
 */

require_once 'database/IEntity.php';

class Sesion implements IEntity
{
    private $id_Sesion;
    private $horas_Sesion;
    private $dia_Sesion;
    private $id_Cine;
    private $id_Pelicula;

    /**
     * Sesion constructor.
     * @param $id_Sesion
     * @param $horas_Sesion
     * @param $dia_Sesion
     * @param $id_Cine
     * @param $id_Pelicula
     */
    public function __construct($horas_Sesion='', $dia_Sesion='', $id_Cine=0, $id_Pelicula=0)
    {
        $this->id_Sesion = null;
        $this->horas_Sesion = $horas_Sesion;
        $this->dia_Sesion = $dia_Sesion;
        $this->id_Cine = $id_Cine;
        $this->id_Pelicula = $id_Pelicula;
    }

    /**
     * @return null
     */
    public function getIdSesion()
    {
        return $this->id_Sesion;
    }

    /**
     * @param null $id_Sesion
     * @return Sesion
     */
    public function setIdSesion($id_Sesion)
    {
        $this->id_Sesion = $id_Sesion;
        return $this;
    }

    /**
     * @return string
     */
    public function getHorasSesion(): string
    {
        return $this->horas_Sesion;
    }

    /**
     * @param string $horas_Sesion
     * @return Sesion
     */
    public function setHorasSesion(string $horas_Sesion): Sesion
    {
        $this->horas_Sesion = $horas_Sesion;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiaSesion(): string
    {
        return $this->dia_Sesion;
    }

    /**
     * @param string $dia_Sesion
     * @return Sesion
     */
    public function setDiaSesion(string $dia_Sesion): Sesion
    {
        $this->dia_Sesion = $dia_Sesion;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCine(): int
    {
        return $this->id_Cine;
    }

    /**
     * @param int $id_Cine
     * @return Sesion
     */
    public function setIdCine(int $id_Cine): Sesion
    {
        $this->id_Cine = $id_Cine;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdPelicula(): int
    {
        return $this->id_Pelicula;
    }

    /**
     * @param int $id_Pelicula
     * @return Sesion
     */
    public function setIdPelicula(int $id_Pelicula): Sesion
    {
        $this->id_Pelicula = $id_Pelicula;
        return $this;
    }


    public function toArray(): array
    {
      return[
          'id_Sesion'=>$this->id_Sesion,
          'horas_Sesion'=>$this->horas_Sesion,
          'dia_Sesion'=>$this->dia_Sesion,
          'id_Cine'=>$this->id_Cine,
          'id_Pelicula'=>$this->id_Pelicula
      ];

    }
}