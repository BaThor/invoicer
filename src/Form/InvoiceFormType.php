<?php

namespace App\Form\Type;

use App\Entity\Invoice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Buyer;
use App\Entity\Seller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InvoiceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('paymentType', TextType::class, [
                    'label' => 'Typ płatności',
                ]
            )
            ->add('invoiceNumber', IntegerType::class, [
                    'label' => 'Numer faktury',
                ]
            )
            ->add('additionalInfo', TextType::class, [
                    'label' => 'Dodatkowe informacje',
                ]
            )
            ->add('invoiceDate', DateType::class, [
                    'label' => 'Data wystawienia',
                ]
            )
            ->add('paymentDate', DateType::class, [
                    'label' => 'Termin zapłaty',
                ]
            )

            ->add('seller', EntityType::class, [
                'class' => Seller::class,
                'choice_label' => function(Seller $seller) {
                    return $seller->getFirstName() . ' ' . $seller->getLastName();
                },
            ])
            ->add('buyer', EntityType::class, [
                'class' => Buyer::class,
                'choice_label' => function(Buyer $buyer) {
                    return $buyer->getFirstName() . ' ' . $buyer->getLastName();
                },
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Generuj'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Invoice::class,
        ));
    }

}