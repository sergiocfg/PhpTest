<?php

/**
 * Created by PhpStorm.
 * User: sboudy
 * Date: 2/23/2017
 * Time: 12:06 PM
 */
abstract class Human
{
protected $weight = 0;
protected $height = 0;

    /**
     * @param null $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param null $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return null
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Human constructor.
     * @param $weight
     * @param $height
     */
    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    abstract public function Weight();
}