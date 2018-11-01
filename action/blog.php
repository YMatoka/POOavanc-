<?php


namespace App\action;

use App\Service\service;
use vendor\symfony\httpFoundation\Request;
use vendor\symfony\httpFoundation\Response;
use vendor\zendframework\zend\src\TemplateRendererInterface;

class blog
{

    private $renderer;
    private $postService;

    public function __construct(TemplateRendererInterface $renderer, PostService $postService)

    {

        $this->renderer = $renderer;
        $this->postService = $postService;

    }

    public function handle(Request $request)
    {

        $value = $request->query->get('param1');
        $this->postService->find($value);
        return new Response($this->renderer->render('helloworld.html.twig'));
        
    }

}