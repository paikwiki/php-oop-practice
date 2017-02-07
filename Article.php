<?php

require 'Post.php';

class Article extends Post
{
    public function getTitle()
    {
        return str_replace(' ', '_', $this->title);
    }
}

//$article = new Article('Tumultumques ridetis!');
//echo $article->getTitle();