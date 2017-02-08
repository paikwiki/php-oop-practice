<?php

require 'Post.php';

class Article extends Post
{
    public function getTitle()
    {
        return str_replace(' ', '_', $this->title);
    }
}

//$article = new Article('A falsis, gemna emeritis finis.');
//echo $article->getTitle();