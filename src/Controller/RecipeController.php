<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipeController extends AbstractController
{
    #[Route('/recipe', name: 'recipe')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('recipe.html.twig', [
            'number' => $number,
        ]);
    }
}