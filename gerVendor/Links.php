<?php


class Links
{
    protected $nota = 'https://youtu.be/mlntN68aMxY';
    protected $index = 'mlntN68aMxY';

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