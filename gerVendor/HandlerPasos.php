<?php

namespace gerVendor;

class HandlerPasos
{
    public function getPasos(): array
    {
        /**  Formato '2020-06-23 18:00' $nota */
        $paso = new Pasos();
        $ahora = date('Y-m-d H:i');


        $fecha = $paso->getFecha1();
        $texto = $paso->getTexto1();
        $hora = $paso->getHora1();
        $titulo = $paso->getTitulo1();
        $lugar = $paso->getLugar1();


        if ($ahora > date($paso->getDate1())) {

            $fecha = $paso->getFecha2();
            $texto = $paso->getTexto2();
            $hora = $paso->getHora2();
            $titulo = $paso->getTitulo2();
            $lugar = $paso->getLugar2();
        }

        if ($ahora > date($paso->getDate2())) {

            $fecha = $paso->getFecha3();
            $texto = $paso->getTexto3();
            $hora = $paso->getHora3();
            $titulo = $paso->getTitulo3();
            $lugar = $paso->getLugar3();
        }
        return [
            'fecha' => $fecha,
            'texto' => $texto,
            'hora' => $hora,
            'titulo' => $titulo,
            'lugar' => $lugar,
        ];


    }

}