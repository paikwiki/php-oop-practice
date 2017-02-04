<?php

require 'Writing.php';
//require 'ArrayStorage.php';
require 'FileStorage.php';

class Post extends Writing
{

    public function save()
    {
        $this->storage->put([
            'model' => __CLASS__,
            'title' => $this->title,
        ]);
    }
}

//$post = new Post('foo title....');
//$post->setTitle('short');
//$post->title;
//$post->getTitle();

//(new Post('Lorem ipsum dolor sit'))->save();

//$storage = new ArrayStorage;
$storage = new FileStorage;
(new Post('Lorem ipsum dolor sit', $storage))->save();
(new Post('Duis dolor in reprehenderit', $storage))->save();
var_dump($storage->collection());
