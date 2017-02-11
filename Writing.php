<?php

abstract class Writing
{
    protected $title;
    protected $storage;
    protected $viewCount = 0;

    public function __construct($title, StorageInterface $storage)
    {
        $this->setTitle($title);
        $this->storage = $storage;
    }

    /**
     * @param mixed $title
     * @throws Exception
     */
    protected function setTitle($title)
    {
        if(strlen($title)<10)
        {
            throw new Exception('10글자보다 길게 입력하세요');
        }
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return ucfirst($this->title);
    }

    public function increaseViewCount()
    {
        $this->viewCount += 1;
    }

    abstract function save();
}