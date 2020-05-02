<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Buyer;
use App\Form\Type\BuyerFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BuyerController extends Controller
{

    /**
     * @Route("/dodaj-nabywce")
    */
    public function indexAction(Request $request)
    {

        $buyer = new Buyer();

        $form = $this->createForm(BuyerFormType::class, $buyer);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($buyer);
            $entityManager->flush();
        }

        return $this->render('buyer/add-buyer.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}