<?php

namespace App\Controller;

use App\Repository\NutsRepository;
use App\Repository\SquirrelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirrelRepository $squirrelRepository, NutsRepository $nutsRepository): Response
    {
        $squirrels = $squirrelRepository->findAll();
        $nuts = $nutsRepository->findAll();

        return $this->render(
            'home/index.html.twig',
            [
                'squirrels' => $squirrels,
                'nuts' => $nuts
            ]
        );
    }
}
