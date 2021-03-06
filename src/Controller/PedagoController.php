<?php

namespace App\Controller;

use App\Repository\PedagoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PedagoController extends AbstractController
{
    /**
     * @Route("/pedago", name="pedago_index")
     */
    public function index(PedagoRepository $pedagoRepository)
    {
        $pedagos = $pedagoRepository->findBy([], ['title' => 'ASC']);

        return $this->render('pedago/index.html.twig', compact('pedagos'));
    }
}
