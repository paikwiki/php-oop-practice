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
