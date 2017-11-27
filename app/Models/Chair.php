<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 23-Nov-17
 * Time: 16:56
 */

namespace App\Models;


class Chair
{
    public $name;
    public $price;
    public $colour;
    public $material;
    public $size;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColour()
    {
        return $this->colour;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getSize()
    {
        return $this->size;
    }

}