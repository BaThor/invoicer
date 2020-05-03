<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Invoice;
use App\Form\Type\InvoiceFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DashboardController extends Controller
{

    /**
     * @Route("/")
    */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig', [
        ]);

    }
}