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
(new Post('Altus elevatus saepe resuscitabos eleates est.', $storage))->save();
(new Post('Nunquam resuscitabo lanista.', $storage))->save();
var_dump($storage->collection());

//$storage = new ArrayStorage;
//(new Post('Calcaria congregabos, tanquam teres barcas.', $storage))->save();
//(new Post('Brevis exemplars ducunt ad nix.', $storage))->save();
//var_dump($storage->collection());

//(new Post('Cur xiphias prarere?'))->save();

//$post = new Post('Naviss observare!');
//echo $post->getTitle();

//$post = new Post('Sunt brabeutaes imperium ferox, fortis caculaes.');
//$post->increaseViewCount();
//$post->increaseViewCount();
//var_dump($post);

//$post = new Post('Sunt brabeutaes imperium ferox, fortis caculaes.');
//echo $post->title;

//$post = new Post;
//$post->title = 'Sunt mensaes experientia noster, albus scutumes.';
//echo $post->title;
