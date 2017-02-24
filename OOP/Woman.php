<?php

/**
 * Created by PhpStorm.
 * User: sboudy
 * Date: 2/23/2017
 * Time: 12:07 PM
 */

class Woman extends Human
{
protected $noWork = null;

    /**
     * @return null
     */
    public function getNoWork()
    {
        return $this->noWork;
    }

    /**
     * @param null $noWork
     */
    public function setNoWork($noWork)
    {
        $this->noWork = $noWork;
    }

    /**
     * Woman constructor.
     * @param $weight
     * @param $height
     * @param $noWork
     */
    public function __construct($weight, $height, $noWork)
    {
        parent::__construct($weight, $height);
        $this->noWork = $noWork;
    }

    public function Weight()
    {
        return  "Woman: " . ($this->weight + $this->noWork);
    }
}