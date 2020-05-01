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

        $invoice = new Invoice();

        $form = $this->createForm(InvoiceFormType::class, $invoice);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($invoice);
            $entityManager->flush();
        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}