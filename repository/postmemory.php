<?php


namespace App\Repository;

use App\Entity\Post as PostEntity;


final class InMemoryPost implements Post

{

    private $post = [];
    public function __construct()

    {

        $uuid = '69e7a80b-925d-4670-a264-912a67523f5a';

        $this->post[$uuid] = new PostEntity( $uuid,'je sais pas','je taime', 'presley');





    }

    public function find(string $id)
    {

        if (!isset($this->post[$id])) {

            throw new \LogicException('Id does not exist');
        }



        return $this->post[$id];

    }


}