<?php

require 'StorageInterface.php';

class ArrayStorage implements StorageInterface0
{
    public $collection;

    public function put($item)
    {
        $this->collection[] = $item;
    }

    public function collection()
    {
        return $this->collection;
    }
}