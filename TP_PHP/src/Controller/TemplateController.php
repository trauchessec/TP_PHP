<?php

namespace App\Controller;

use App\Repository\CardTemplateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    /**
     * @Route("/templates", name="templates")
     */
    public function templates(CardTemplateRepository $cardTemplateRepository) 
    {
        return $this->render('template/template.html.twig', 
        ["templates" => $cardTemplateRepository->findAll()]);
    }

}
