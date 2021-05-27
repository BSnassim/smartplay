<?php

namespace App\Controller;

use App\Repository\JouetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class JouetController extends AbstractController
{
    /**
     * @Route("/jouet", name="jouet")
     * @param JouetRepository $rep
     * @return Response
     */
    
    public function index(JouetRepository $rep): Response
    {
       $this->repository = $rep;
        $jouet = $this->repository-> findBy(['code_four_jouet'=>3]);
        $max = $this->repository-> findMaxStock();
        $a = $this->repository-> findMinPrice();
        $min = $this->repository-> findBy(['pu_jouet'=> $a]);
        return $this->render('pages/jouet.html.twig', [
            'controller_name' => 'JouetController','edugame' => $jouet,'max'=>$max, 'min'=>$min
        ]);
    }
}
