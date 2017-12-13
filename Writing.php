<?php

abstract class Writing
{
    protected $storage;
    public function __construct($title, StorageInterface $storage)
    {
        $this->setTitle($title);
        $this->storage = $storage;
    }
    abstract public function save();
}