<?php
namespace gerVendor;
use gerVendor\Links;

class HandlerNotas
{
    public function getReferencias(string $date):array
    {
        /**  Formato '2020-06-23 18:00' $nota */
        $nota = new Links();
        $ahora = date('Y-m-d H:i');


         $fecha = $nota->getFecha();
         $title = $nota->getTitle();
         $autor = $nota->getAutor();
         $image = $nota->getImage1();
         $link = $nota->getNota();
         $finalLnk = $nota->getIndex();


        if ($ahora > date($date)) {

            $fecha = $nota->getFecha2();
            $title = $nota->getTitle2();
            $autor = $nota->getAutor2();
            $image = $nota->getImage2();
            $link = $nota->getNota2();
            $finalLnk = $nota->getIndex2();
        }
        return [

        'fecha'=>$fecha,
            'title'=>$title,
            'autor'=>$autor,
            'image'=>$image,
            'link'=>$link,
            'finalLink'=>$finalLnk
        ];



    }

}