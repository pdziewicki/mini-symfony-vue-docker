<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact_list', methods: ['GET'])]
    public function get_all(ContactRepository $repository): JsonResponse
    {
        return $this->json($repository->findAll());
    }
}
