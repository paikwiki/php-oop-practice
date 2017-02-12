<?php
require 'StorageInterface.php';

class ArrayStorage implements StorageInterface
{
    protected $collection = [];

    /**
     * @param $item
     */
    public function put($item)
    {
        $this->collection[] = $item;
    }

    /**
     * @return array
     */
    public function collection()
    {
        return $this->collection;
    }
}