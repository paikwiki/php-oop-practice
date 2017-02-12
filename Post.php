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

//$storage = new ArrayStorage;
$storage = new FileStorage;

(new Post('Nunquam anhelare caesium.', $storage))->save();
(new Post('Cur lacta mori.', $storage))->save();
var_dump($storage->collection());
