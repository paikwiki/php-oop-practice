<?php

require 'Post.php';

class Article extends Post
{
    public function getTitle()
    {
        return str_replace(' ', '_', $this->title);
    }
}

//echo (new Article('Brodiums potus!'))->getTitle();