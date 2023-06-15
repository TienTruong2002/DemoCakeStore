<?php

namespace App\Controller;

use App\Entity\Supplier;
use App\Repository\SupplierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupplierController extends AbstractController
{
    #[Route('/supplier', name: 'app_supplier')]
    public function index(SupplierRepository $supplierRepository): Response
    {
        $suppliers = $supplierRepository->findAll();
        return $this->render('supplier/index.html.twig', [
            'suppliers' => $suppliers,
        ]);
    }

    #[Route('/supplier/{id}', name: 'app_supplier_details')]
    public function detailsAction(SupplierRepository $supplierRepository, Supplier
    $supplier): Response
    {
//        dd($supplier);
        return $this->render('supplier/detail.html.twig', [
            'supplier' => $supplier
        ]);
    }

}
