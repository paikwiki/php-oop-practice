<?php

require 'Writing.php';
require 'FileStorage.php';

class Post extends Writing
{
    protected $title;
    public $viewCount = 0;

    public function setTitle($title)
    {
        if (strlen($title) < 10) {
            throw new Exception('10 글자보다 긴 제목을 입력해 주세요');
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

    public function save()
    {
        $this->storage->put([
            'model' => __CLASS__,
            'title' => $this->title,
        ]);
    }
}

$storage = new FileStorage();
$post = new Post('Lorem ipsum dolor sit amet', $storage);
$post->save();
$post2 = new Post('Duis dolor in reprehenderit', $storage);
$post2->save();
var_dump($storage->collection());

