<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Seller;
use App\Form\Type\SellerFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SellerController extends Controller
{

    /**
     * @Route("/dodaj-sprzedawce")
    */
    public function indexAction(Request $request)
    {

        $seller = new Seller();

        $form = $this->createForm(SellerFormType::class, $seller);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($seller);
            $entityManager->flush();
        }

        return $this->render('seller/add-seller.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}