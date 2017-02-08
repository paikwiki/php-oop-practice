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

$storage = new FileStorage;
(new Post('Sunt ionicis tormentoes transferre nobilis, rusticus galataees.', $storage))->save();
(new Post('Sunt ventuses imperium nobilis, salvus urbses.', $storage))->save();
var_dump($storage->collection());

//$storage = new ArrayStorage;
//(new Post('Sunt ionicis tormentoes transferre nobilis, rusticus galataees.', $storage))->save();
//(new Post('Sunt ventuses imperium nobilis, salvus urbses.', $storage))->save();
//var_dump($storage->collection());

//$post = new Post('Turpis, cannabis, et detrius.');
//$post->save();
//$post = new Post('Fidess volare, tanquam festus parma.');
//echo $post->getTitle();

//$post = new Post('Nunquam experientia axona?');
//$post->increaseViewCount();
//$post->increaseViewCount();
//var_dump($post);

//$post = new Post('Cur silva prarere?');
//echo $post->title;

//$post = new Post;
//$post->title = 'Cur silva prarere?';
//echo $post->title;