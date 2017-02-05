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
(new Post('Glutens assimilant!', $storage))->save();
(new Post('Genetrix velums, tanquam pius zelus.', $storage))->save();
var_dump($storage->collection());

//$storage = new ArrayStorage;
//(new Post('Glutens assimilant!', $storage))->save();
//(new Post('Genetrix velums, tanquam pius zelus.', $storage))->save();
//var_dump($storage->collection());

//(new Post('Ire unus ducunt ad bassus torquis.'))->save();

//$post = new Post('for title....');
////$post->setTitle('short');
//$post->title;
//echo $post->getTitle();

//$post = new Post('for title....');
//echo $post->getTitle();

//$post = new Post('for title');
//$post->increaseViewCount();
//$post->increaseViewCount();
//var_dump($post);

//$post = new Post('for title');
//echo $post->title;

//$post = new Post();
//$post->title = 'for title';
//echo $post->title;


