<?php


class Links
{
    protected $nota = 'https://youtu.be/c7n-w-0Ucno';
    protected $index = 'c7n-w-0Ucno';
    protected $autor = 'Pastor Fabian Ruiz';
    protected $fecha = '26 de julio';
    protected $title = 'Peleando por las lentejas';

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