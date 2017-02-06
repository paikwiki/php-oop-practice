<?php

require 'Writing.php';

class Post extends Writing
{
    function save()
    {
        $this->storage->put([
            'model' => __CLASS__,
            'title' => $this->title,
        ]);
    }
}

$storage = new FileStorage;
(new Post('Tumultumques ridetis!', $storage))->save();
(new Post('Bromiums ortum!', $storage))->save();
var_dump($storage->collection());

//$storage = new ArrayStorage;
//(new Post('Tumultumques ridetis!', $storage))->save();
//(new Post('Bromiums ortum!', $storage))->save();
//var_dump($storage->collection());

//(new Post('Tumultumques ridetis!'))->save();

//$post = new Post('Tumultumques ridetis!');
//echo $post->getTitle();

//$post = new Post('Teres detrius absolute falleres bursa est.');
//$post->increaseViewCount();
//$post->increaseViewCount();
//var_dump($post);

//$post = new Post('Zetas nocere, tanquam festus itineris tramitem.');
//echo $post->title;

//$post = new Post;
//$post->title = 'Zetas nocere, tanquam festus itineris tramitem.';
//echo $post->title;