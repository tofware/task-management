<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/tasks')]
    public function index(): Response
    {
        return $this->render('tasks/index.html.twig', [
            'tasks' => 'task'
        ]);
    }
}