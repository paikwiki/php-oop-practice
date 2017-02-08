<?php

require 'StorageInterface.php';

abstract class Writing
{
    protected $title;
    protected $storage;
    public $viewCount = 0;

    public function __construct($title, StorageInterface $storage)
    {
        $this->setTitle($title);
        $this->storage = $storage;
    }

    protected function setTitle($title)
    {
        if (strlen($title)<10)
        {
            throw new Exception('10글자보다 길게 입력해 주세요.');
        }
        $this->title = $title;
    }

    public function getTitle()
    {
        return ucfirst($this->title);
    }

    public function increaseViewCount()
    {
        $this->viewCount += 1;
    }

    abstract public function save();
}
