<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\NewsRepository;
use App\Repository\AboutRepository;
use App\Repository\ExpertiseRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\NewsCategoryRepository;
use App\Repository\UploadCarrouselRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UploadBackgroundRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(
        UploadBackgroundRepository $uploadBackgroundRepository,
        UploadCarrouselRepository $uploadCarrouselRepository,
        Request $request,
        EntityManagerInterface $manager,
        AboutRepository $aboutRepository,
        ExpertiseRepository $expertiseRepository,
        NewsRepository $newsRepository,
        NewsCategoryRepository $newsCategoryRepository
    ): Response {
        $contact = new Contact();
        $contactForm = $this->createForm(ContactType::class, $contact);
        $contactForm->handleRequest($request);

        if ($contactForm->isSubmitted() && $contactForm->isValid()) {
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($contact);
            $manager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('default/index.html.twig', [
            'background' => $uploadBackgroundRepository->findAll([], ['id' => 'DESC'], 1),
            'carousel' => $uploadCarrouselRepository
            ->findBy([], $orderBy = ['id' => 'DESC'], $limit = 3, $offset = null),
            'about' => $aboutRepository->findAll()[0],
            'expertises' => $expertiseRepository->findAll(),
            'form' => $contactForm->createView(),
            'news' => $newsRepository->findBy([], ['id' => 'DESC'], 4),
            'newscategory' => $newsCategoryRepository->findOneBy([], ['id' => 'ASC']),
            ]);
    }

    /**
     * @Route("/actualites-recentes", name="recent_actualities")
     */
    public function recent(
        UploadBackgroundRepository $uploadBackgroundRepository,
        NewsRepository $newsRepository,
        AboutRepository $aboutRepository
    ): Response {
        return $this->render('default/recent.html.twig', [
        'background' => $uploadBackgroundRepository->findAll([], ['id' => 'DESC'], 1),
        'abouts' => $aboutRepository->findAll(),
        'news' => $newsRepository->findBy([], ['id' => 'DESC'], 2),
            ]);
    }


    /**
     * @Route("/journal", name="newspaper")
     */
    public function journal(
        UploadBackgroundRepository $uploadBackgroundRepository,
        NewsRepository $newsRepository,
        AboutRepository $aboutRepository,
        NewsCategoryRepository $newsCategoryRepository
    ): Response {
        return $this->render('default/journal.html.twig', [
        'background' => $uploadBackgroundRepository->findAll([], ['id' => 'DESC'], 1),
        'abouts' => $aboutRepository->findAll(),
        'news' => $newsRepository->findAll(),
        'newscategory' => $newsCategoryRepository->findAll(),
        ]);
    }
    /**
     * @Route("/actualites-importantes", name="important_actualities")
     */
    public function importante(
        UploadBackgroundRepository $uploadBackgroundRepository,
        NewsRepository $newsRepository,
        AboutRepository $aboutRepository,
        NewsCategoryRepository $newsCategoryRepository
    ): Response {
        return $this->render('default/importante.html.twig', [
        'background' => $uploadBackgroundRepository->findAll([], ['id' => 'DESC'], 1),
        'abouts' => $aboutRepository->findAll(),
        'news' => $newsRepository->findAll(),
        'newscategory' => $newsCategoryRepository->findAll(),
        ]);
    }
     /**
     * @Route("/actualites", name="actualities")
     */
    public function actualites(
        UploadBackgroundRepository $uploadBackgroundRepository,
        NewsRepository $newsRepository,
        AboutRepository $aboutRepository,
        NewsCategoryRepository $newsCategoryRepository
    ): Response {
        return $this->render('default/actualites.html.twig', [
        'background' => $uploadBackgroundRepository->findAll([], ['id' => 'DESC'], 1),
        'abouts' => $aboutRepository->findAll(),
        'news' => $newsRepository->findAll(),
        'newscategory' => $newsCategoryRepository->findAll(),
        ]);
    }
}