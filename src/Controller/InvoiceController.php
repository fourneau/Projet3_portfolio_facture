<?php

namespace App\Controller;

use App\Repository\AboutRepository;
use App\Repository\CustomerRepository;
use App\Repository\DiligenceRepository;
use App\Repository\FolderRepository;
use App\Repository\OwnerRepository;
use App\Repository\PaymentTermsRepository;
use App\Repository\PresetDiligenceRepository;
use App\Repository\RateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceController extends AbstractController
{
    private $aboutRepository;
    private $customerRepository;
    private $diligenceRepository;
    private $folderRepository;
    private $ownerRepository;
    private $paymentTermsRepository;
    private $presetDiligenceRepository;
    private $rateRepository;

    public function __construct(
        AboutRepository $aboutRepository,
        CustomerRepository $customerRepository,
        DiligenceRepository $diligenceRepository,
        FolderRepository $folderRepository,
        OwnerRepository $ownerRepository,
        PaymentTermsRepository $paymentTermsRepository,
        PresetDiligenceRepository $presetDiligenceRepository,
        RateRepository $rateRepository
    ) {
        $this->aboutRepository = $aboutRepository;
        $this->customerRepository = $customerRepository;
        $this->diligenceRepository = $diligenceRepository;
        $this->folderRepository = $folderRepository;
        $this->ownerRepository = $ownerRepository;
        $this->paymentTermsRepository = $paymentTermsRepository;
        $this->presetDiligenceRepository = $presetDiligenceRepository;
        $this->rateRepository = $rateRepository;
    }

    /**
     * @Route("/facturation/{folderId}", name="invoice")
     */
    public function index(int $folderId): Response
    {
        $folder = $this->folderRepository->find($folderId);
        //dd($folder);
        if (strtolower($folder->getBusinessType()->getName() == 'Contentieux')) {
            return $this->render('invoice/indexInvoice.html.twig', [
            'abouts' => $this->aboutRepository->findAll(),
            'customers' => $this->customerRepository->findAll(),
            'diligences' => $this->diligenceRepository->findAll(),
            'folders' => $this->folderRepository->findBy(['id' => $folder->getId()]),
            'owners' => $this->ownerRepository->findAll(),
            'paymentterms' => $this->paymentTermsRepository->findAll(),
            'presetdiligences' => $this->presetDiligenceRepository->findAll(),
            'rates' => $this->rateRepository->findAll(),
            ]);
        } else {
            return $this->render('invoice/socialCouncil.html.twig', [
            'abouts' => $this->aboutRepository->findAll(),
            'customers' => $this->customerRepository->findAll(),
            'diligences' => $this->diligenceRepository->findAll(),
            'folders' => $this->folderRepository->findBy(['id' => $folder->getId()]),
            'owners' => $this->ownerRepository->findAll(),
            'paymentterms' => $this->paymentTermsRepository->findAll(),
            'presetdiligences' => $this->presetDiligenceRepository->findAll(),
            'rates' => $this->rateRepository->findAll(),
            ]);
        }
    }
}
