<?php

declare(strict_types=1);
namespace App\Repository;
use App\Entity\post as PostEntity;

interface Post
{
    public function find(string $id);
    public function create(string $title);
}