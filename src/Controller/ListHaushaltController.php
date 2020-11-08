<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListHaushaltController extends AbstractController
{
    /**
     * @Route("/list/haushalt", name="list_haushalt")
     */
    public function index(): Response
    {
        return $this->render('list_haushalt/index.html.twig', [
            'controller_name' => 'ListHaushaltController',
        ]);
    }
}
