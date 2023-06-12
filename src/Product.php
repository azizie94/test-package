<?php

namespace src;

class Product
{
    protected $type;
    protected $price;

    public function __construct($type)
    {
        $this->type = $type;

        switch ($type) {
            case 'book':
                $this->price = 10.00;
                break;
            case 'music':
                $this->price = 15.00;
                break;
            case 'video':
                $this->price = 20.00;
                break;
            default:
                $this->price = 0.00;
                break;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }
}
