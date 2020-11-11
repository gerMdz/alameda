<?php

namespace gerVendor;
class Pasos
{
    protected $date1 = '2020-11-21 18:00';
    protected $fecha1 = '21 de noviembre';
    protected $hora1 = '18:00hs';
    protected $titulo1 = "Paso Uno";
    protected $texto1 = 'Conéctate con la Alameda y descubrí las siete claves para pertenecer a la familia de
                                    fe. Aprendé más detalles sobre nuestra visión, creencias y liderazgo. También
                                    tendrás la oportunidad de convertirte en miembro de la Alameda';
    protected $lugar1 = 'San Martín 2020';


    protected $date2 = '2020-11-28 18:00';
    protected $fecha2 = '28 de noviembre';
    protected $hora2 = '18:00hs';
    protected $titulo2 = "Paso Dos";
    protected $texto2 = 'Aprendé como desarrollar los tres hábitos que te llevarán a una vida de libertad y victoria en tu vida cristiana.';
    protected $lugar2 = 'España y Eusebio Blanco';

    protected $date3 = '2020-12-18 18:00';
    protected $fecha3 = '18 de diciembre';
    protected $hora3 = '18:00hs';
    protected $titulo3 = "Paso Tres";
    protected $texto3 = 'Sumergite en los detalles de tu personalidad, descubrí tus dones y experimenta cómo tu diseño revela tu propósito en la vida y tu mejor lugar en el voluntariado de la Alameda. Conéctate con las oportunidades disponibles en la Alameda para vivir tu propósito y servir a los demás utilizando los dones que Dios le ha dado.';
    protected $lugar3 = 'San Martín 2020';
    /**
     * @return string
     */
    public function getFecha1(): string
    {
        return $this->fecha1;
    }

    /**
     * @param string $fecha1
     */
    public function setFecha1(string $fecha1): void
    {
        $this->fecha1 = $fecha1;
    }

    /**
     * @return string
     */
    public function getTexto1(): string
    {
        return $this->texto1;
    }

    /**
     * @param string $texto1
     */
    public function setTexto1(string $texto1): void
    {
        $this->texto1 = $texto1;
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
    public function getTexto2(): string
    {
        return $this->texto2;
    }

    /**
     * @param string $texto2
     */
    public function setTexto2(string $texto2): void
    {
        $this->texto2 = $texto2;
    }

    /**
     * @return string
     */
    public function getFecha3(): string
    {
        return $this->fecha3;
    }

    /**
     * @param string $fecha3
     */
    public function setFecha3(string $fecha3): void
    {
        $this->fecha3 = $fecha3;
    }

    /**
     * @return string
     */
    public function getTexto3(): string
    {
        return $this->texto3;
    }

    /**
     * @param string $texto3
     */
    public function setTexto3(string $texto3): void
    {
        $this->texto3 = $texto3;
    }

    /**
     * @return string
     */
    public function getDate1(): string
    {
        return $this->date1;
    }

    /**
     * @param string $date1
     */
    public function setDate1(string $date1): void
    {
        $this->date1 = $date1;
    }

    /**
     * @return string
     */
    public function getDate2(): string
    {
        return $this->date2;
    }

    /**
     * @param string $date2
     */
    public function setDate2(string $date2): void
    {
        $this->date2 = $date2;
    }

    /**
     * @return string
     */
    public function getDate3(): string
    {
        return $this->date3;
    }

    /**
     * @param string $date3
     */
    public function setDate3(string $date3): void
    {
        $this->date3 = $date3;
    }

    /**
     * @return string
     */
    public function getHora1(): string
    {
        return $this->hora1;
    }

    /**
     * @param string $hora1
     */
    public function setHora1(string $hora1): void
    {
        $this->hora1 = $hora1;
    }

    /**
     * @return string
     */
    public function getTitulo1(): string
    {
        return $this->titulo1;
    }

    /**
     * @param string $titulo1
     */
    public function setTitulo1(string $titulo1): void
    {
        $this->titulo1 = $titulo1;
    }

    /**
     * @return string
     */
    public function getHora2(): string
    {
        return $this->hora2;
    }

    /**
     * @param string $hora2
     */
    public function setHora2(string $hora2): void
    {
        $this->hora2 = $hora2;
    }

    /**
     * @return string
     */
    public function getTitulo2(): string
    {
        return $this->titulo2;
    }

    /**
     * @param string $titulo2
     */
    public function setTitulo2(string $titulo2): void
    {
        $this->titulo2 = $titulo2;
    }

    /**
     * @return string
     */
    public function getHora3(): string
    {
        return $this->hora3;
    }

    /**
     * @param string $hora3
     */
    public function setHora3(string $hora3): void
    {
        $this->hora3 = $hora3;
    }

    /**
     * @return string
     */
    public function getTitulo3(): string
    {
        return $this->titulo3;
    }

    /**
     * @param string $titulo3
     */
    public function setTitulo3(string $titulo3): void
    {
        $this->titulo3 = $titulo3;
    }

    /**
     * @return string
     */
    public function getLugar1(): string
    {
        return $this->lugar1;
    }

    /**
     * @param string $lugar1
     */
    public function setLugar1(string $lugar1): void
    {
        $this->lugar1 = $lugar1;
    }

    /**
     * @return string
     */
    public function getLugar2(): string
    {
        return $this->lugar2;
    }

    /**
     * @param string $lugar2
     */
    public function setLugar2(string $lugar2): void
    {
        $this->lugar2 = $lugar2;
    }

    /**
     * @return string
     */
    public function getLugar3(): string
    {
        return $this->lugar3;
    }

    /**
     * @param string $lugar3
     */
    public function setLugar3(string $lugar3): void
    {
        $this->lugar3 = $lugar3;
    }




}
