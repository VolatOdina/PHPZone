<?php

namespace myProject\Models\Articles;

use MyProject\Models\Users\Users;

class Articles
{
    private $title;
    private $text;
    private $author;

public function __construct(string $tatle, string $text, Users $author)
{
    $this->title = $tatle;
    $this->text = $text;
    $this->author = $author;
}

public function getTitle():string 
{
    return $this-> title;
}

public function getText():string 
{
    return $this-> text;
}

public function getAuthor(): Users
{
    return $this-> author;
}
}