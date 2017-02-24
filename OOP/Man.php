<?php

/**
 * Created by PhpStorm.
 * User: sboudy
 * Date: 2/23/2017
 * Time: 12:07 PM
 */
require ("Human.php");
class Man extends Human
{
protected $work = 0;

    /**
     * @param null $work
     */
    public function setWork($work)
    {
        $this->work = $work;
    }

    /**
     * @return null
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Man constructor.
     * @param $weight
     * @param $height
     * @param $work
     */
    public function __construct($weight, $height, $work)
    {
        parent::__construct($weight, $height);
        $this->work = $work;
    }

    public function Weight()
    {
        return "Man: " . ($this->weight + $this->work);
    }
}