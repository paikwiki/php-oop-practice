<?php
require 'Writing.php';
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

$storage = new FileStorage;
(new Post('Ubi est azureus onus?', $storage))->save();
(new Post('Ubi est noster apolloniates?', $storage))->save();

var_dump($storage->collection());