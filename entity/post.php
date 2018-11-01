<?php

namespace App\Entity;

final class Post
{

    private $id;
    private $title;
    private $user;
    private $comment;

    public function __construct(string $id, string $title, string $commente, string $user)
    {

        $this->id = $id;
        $this->title = $title;
        $this->user = $user;
        $this->comment = $comment;

    }

}