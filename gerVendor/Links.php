<?php


class Links
{
    protected $nota = 'https://youtu.be/WCIjIWEegdA';
    protected $index = 'WCIjIWEegdA';
    protected $autor = 'por Fabian Ruiz';
    protected $fecha = '02 de Agosto de 2020';
    protected $title = 'Día de entrenamiento';

    /**
     * @return string
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getNota(): string
    {
        return $this->nota;
    }

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }

}