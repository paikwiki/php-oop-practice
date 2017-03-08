<?php
require 'Post.php';

class Article extends Post
{
    protected function getTitle()
    {
        return str_replace(' ', '_', $this->title);
    }
}
