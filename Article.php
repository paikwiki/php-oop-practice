<?php
require 'Post.php';

class Article extends Post
{
    public function getTitle()
    {
        return str_replace(' ', '_', $this->title);
    }
}

//$article = new Article('Placidus coordinatae absolute apertos guttus est.');
//echo $article->getTitle();