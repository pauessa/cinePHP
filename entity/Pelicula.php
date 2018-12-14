<?php
/**
 * Created by PhpStorm.
 * User: Pauessa
 * Date: 14/12/2018
 * Time: 13:00
 */
require_once 'database/IEntity.php';

class Pelicula implements IEntity
{
    private $id_Pelicula;
    private $titulo_Pelicula;
    private $director_Pelicula;
    private $interprete_Pelicula;
    private $categoria_Pelicula;
    private $duracion_Pelicula;
    private $sinopsis_Pelicula;

    /**
     * Pelicula constructor.
     * @param $id_Pelicula
     * @param $titulo_Pelicula
     * @param $director_Pelicula
     * @param $interprete_Pelicula
     * @param $categoria_Pelicula
     * @param $duracion_Pelicula
     * @param $sinopsis_Pelicula
     */
    public function __construct($titulo_Pelicula = '', $director_Pelicula = '', $interprete_Pelicula = '', $categoria_Pelicula = '', $duracion_Pelicula = '', $sinopsis_Pelicula = '')
    {
        $this->id_Pelicula = null;
        $this->titulo_Pelicula = $titulo_Pelicula;
        $this->director_Pelicula = $director_Pelicula;
        $this->interprete_Pelicula = $interprete_Pelicula;
        $this->categoria_Pelicula = $categoria_Pelicula;
        $this->duracion_Pelicula = $duracion_Pelicula;
        $this->sinopsis_Pelicula = $sinopsis_Pelicula;
    }

    /**
     * @return null
     */
    public function getIdPelicula()
    {
        return $this->id_Pelicula;
    }

    /**
     * @param null $id_Pelicula
     * @return Pelicula
     */
    public function setIdPelicula($id_Pelicula)
    {
        $this->id_Pelicula = $id_Pelicula;
        return $this;
    }

    /**
     * @return string
     */
    public function getTituloPelicula(): string
    {
        return $this->titulo_Pelicula;
    }

    /**
     * @param string $titulo_Pelicula
     * @return Pelicula
     */
    public function setTituloPelicula(string $titulo_Pelicula): Pelicula
    {
        $this->titulo_Pelicula = $titulo_Pelicula;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirectorPelicula(): string
    {
        return $this->director_Pelicula;
    }

    /**
     * @param string $director_Pelicula
     * @return Pelicula
     */
    public function setDirectorPelicula(string $director_Pelicula): Pelicula
    {
        $this->director_Pelicula = $director_Pelicula;
        return $this;
    }

    /**
     * @return string
     */
    public function getInterpretePelicula(): string
    {
        return $this->interprete_Pelicula;
    }

    /**
     * @param string $interprete_Pelicula
     * @return Pelicula
     */
    public function setInterpretePelicula(string $interprete_Pelicula): Pelicula
    {
        $this->interprete_Pelicula = $interprete_Pelicula;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoriaPelicula(): string
    {
        return $this->categoria_Pelicula;
    }

    /**
     * @param string $categoria_Pelicula
     * @return Pelicula
     */
    public function setCategoriaPelicula(string $categoria_Pelicula): Pelicula
    {
        $this->categoria_Pelicula = $categoria_Pelicula;
        return $this;
    }

    /**
     * @return string
     */
    public function getDuracionPelicula(): string
    {
        return $this->duracion_Pelicula;
    }

    /**
     * @param string $duracion_Pelicula
     * @return Pelicula
     */
    public function setDuracionPelicula(string $duracion_Pelicula): Pelicula
    {
        $this->duracion_Pelicula = $duracion_Pelicula;
        return $this;
    }

    /**
     * @return string
     */
    public function getSinopsisPelicula(): string
    {
        return $this->sinopsis_Pelicula;
    }

    /**
     * @param string $sinopsis_Pelicula
     * @return Pelicula
     */
    public function setSinopsisPelicula(string $sinopsis_Pelicula): Pelicula
    {
        $this->sinopsis_Pelicula = $sinopsis_Pelicula;
        return $this;
    }


    public function toArray(): array
    {


        return [
            'id_Pelicula' => $this->id_Pelicula,
            'titulo_Pelicula' => $this->titulo_Pelicula,
            'director_Pelicula' => $this->director_Pelicula,
            'interprete_Pelicula' => $this->interprete_Pelicula,
            'categoria_Pelicula' => $this->categoria_Pelicula,
            'duracion_Pelicula' => $this->duracion_Pelicula,
            'sinopsis_Pelicula' => $this->sinopsis_Pelicula

        ];
    }
}