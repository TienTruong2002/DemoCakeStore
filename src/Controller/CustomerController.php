<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Entity\Todo;
use App\Form\CustomerType;
use App\Form\TodoType;
use App\Repository\CustomerRepository;
use App\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route('/customer', name: 'app_customer')]
    public function index(): Response
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
    #[Route('/customer/all', name: 'app_customer_all')]
    public function getCustomer(CustomerRepository $customerRepository): Response
    {
        $customers = $customerRepository->findAll();
        //dd($customers);
        return $this->render('customer/index.html.twig',
            ['customers' => $customers]);
    }

}
