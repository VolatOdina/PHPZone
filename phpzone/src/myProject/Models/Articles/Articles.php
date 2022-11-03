<?php

namespace myProject\Models\Articles;

class Article
{
    private $title;
    private $text;
    private $author;

public function __construct(string $tatle, string $text, User $author)
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

public function getAuthor(): User
{
    return $this-> author;
}
}