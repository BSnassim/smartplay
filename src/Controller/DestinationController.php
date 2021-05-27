<?php
namespace App\Controller;

use App\Entity\Fournisseur;
use App\Entity\Jouet;
use App\Repository\FournisseurRepository;
use App\Repository\JouetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class DestinationController extends AbstractController
{
    /**
     * @var Twig\Environment
     */

    private $twig;

    public function __construct(Environment $twig)
    {
        
        $this->twig = $twig;
    }

    public function index(/*FournisseurRepository $rep*/):Response
    {
        /*$this->repository = $rep;
        $fournisseur = new Fournisseur();
        $fournisseur = $this->repository->find(3);
        $jouet = new Jouet();
        $em = $this->getDoctrine()->getManager();
        $jouet->setDesJouet("Monopoly")
        ->setQteStockJouet(300)
        ->setPuJouet(34600)
        ->setCodeFourJouet($fournisseur);
        $em->persist($jouet);
        $em->flush($jouet);*/
        return new Response($this->twig->render('pages/partenaires.html.twig'));
    }
}