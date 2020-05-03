<?php

namespace App\Form\Type;

use App\Entity\Seller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SellerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyName', TextType::class, [
                    'label' => 'Nazwa firmy',
                ]
            )
            ->add('firstName', TextType::class, [
                    'label' => 'Imię',
                ]
            )
            ->add('lastName', TextType::class, [
                    'label' => 'Nazwisko',
                ]
            )
            ->add('companyStreet', TextType::class, [
                'label' => 'Ulica',
                ]
            )
            ->add('companyAddressNumber', TextType::class, [
                    'label' => 'Numer adres firmy',
                ]
            )
            ->add('companyPostNumber', TextType::class, [
                    'label' => 'Kod pocztowy',
                ]
            )
            ->add('companyCity', TextType::class, [
                'label' => 'Miasto',
                ]
            )
            ->add('companyNIP', TextType::class, [
                    'label' => 'NIP',
                ]
            )
            ->add('bankAccountNumber', TextType::class, [
                'label' => 'Numer konta bankowego',
                ]
            )
            ->add('submit', SubmitType::class, [
                    'label' => 'Dodaj nabywce'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Seller::class,
        ));
    }

}