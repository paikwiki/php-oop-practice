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
(new Post('Est magnum advena, cesaris!', $storage))->save();
(new Post('Est brevis musa, cesaris!', $storage))->save();
var_dump($storage->collection());