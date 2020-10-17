<?php

namespace gerVendor;
class Links
{

    protected $nota = 'https://youtu.be/q4AdQ--Wnj4';
    protected $index = 'q4AdQ--Wnj4';
    protected $autor = 'por Fabian Ruiz';
    protected $fecha = '10 de octubre de 2020';
    protected $title = 'Con el hambre intacta';
    protected $image = 'estar-bien/estar-bien-tapa.jpg';

    protected $nota2 = 'https://youtu.be/7LxMO8prvYl';
    protected $index2 = '7LxMO8prvYl';
    protected $autor2 = 'por Fabian Ruiz';
    protected $fecha2 = '17 de octubre de 2020';
    protected $title2 = 'Regala Compasión';
    protected $image2 = 'estar-bien/05-estar-bien-tapa.jpg';

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getAutor2(): string
    {
        return $this->autor2;
    }

    /**
     * @param string $autor2
     */
    public function setAutor2(string $autor2): void
    {
        $this->autor2 = $autor2;
    }

    /**
     * @return string
     */
    public function getFecha2(): string
    {
        return $this->fecha2;
    }

    /**
     * @param string $fecha2
     */
    public function setFecha2(string $fecha2): void
    {
        $this->fecha2 = $fecha2;
    }

    /**
     * @return string
     */
    public function getTitle2(): string
    {
        return $this->title2;
    }

    /**
     * @param string $title2
     */
    public function setTitle2(string $title2): void
    {
        $this->title2 = $title2;
    }

    /**
     * @return string
     */
    public function getImage2(): string
    {
        return $this->image2;
    }

    /**
     * @param string $image2
     */
    public function setImage2(string $image2): void
    {
        $this->image2 = $image2;
    }




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

    /**
     * @return string
     */
    public function getNota2(): string
    {
        return $this->nota2;
    }

    /**
     * @param string $nota2
     */
    public function setNota2(string $nota2): void
    {
        $this->nota2 = $nota2;
    }

    /**
     * @return string
     */
    public function getIndex2(): string
    {
        return $this->index2;
    }

    /**
     * @param string $index2
     */
    public function setIndex2(string $index2): void
    {
        $this->index2 = $index2;
    }

}