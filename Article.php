<?php

require 'Post.php';

class Article extends Post
{

    public function getTitle()
    {
        return str_replace(' ', '_', $this->title);
    }
}

//$article = new Article('Ubi est rusticus fluctus?');
//echo $article->getTitle();