<?php

namespace App\Form\Type;

use App\Entity\Buyer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class BuyerFormType extends AbstractType
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
            ->add('street', TextType::class, [
                'label' => 'Ulica',
                ]
            )
            ->add('addressNumber', TextType::class, [
                    'label' => 'Numer domu',
                ]
            )
            ->add('postNumber', TextType::class, [
                    'label' => 'Kod pocztowy',
                ]
            )
            ->add('city', TextType::class, [
                'label' => 'Miasto',
                ]
            )
            ->add('NIP', TextType::class, [
                    'label' => 'NIP',
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
            'data_class' => Buyer::class,
        ));
    }

}