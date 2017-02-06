<?php

require 'Writing.php';
require 'FileStorage.php';
//require 'ArrayStorage.php';

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

(new Post('Nunquam resuscitabo classis.', $storage))->save();
(new Post('Peregrinationes mechanice ducunt ad germanus heuretes.', $storage))->save();
var_dump($storage->collection());

//(new Post('Nunquam reperire impositio?'))->save();

//$post = new Post('Nunquam reperire impositio?');
//$post->increaseViewCount();
//$post->increaseViewCount();
//var_dump($post);

//$post = new Post('Cur sectam messis?');
//echo $post->title;

//$post = new Post;
//$post->title = 'Cur sectam messis?';
//echo $post->title;
