<?php

require 'StorageInterface.php';

class ArrayStorage implements StorageInterface
{
    protected $collectoion = [];

    public function put($item)
    {
        $this->collection[] = $item;
    }

    public function collection()
    {
        return $this->collection;
    }
}