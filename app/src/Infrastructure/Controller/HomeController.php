<?php

namespace Fplet\Local\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
        dump($request);

        return new Response(<<<EOF
            <html>
                <body>
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
        EOF
        );
    }
}
