<?php

namespace App\DataFixtures;

use App\Entity\Contact;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = [
            ["Piotr", "D", "piotr@piotr.com", "Hello"],
            ["Natalka", "K", "natalka@natalka.pl", "world"],
            ["Wojtek", "D", "wojtek@wojtek.com", "Other message"],
        ];

        foreach ($data as [$first_name, $last_name, $email, $message]) {
            $contact = new Contact();
            $contact->setFirstName($first_name);
            $contact->setLastName($last_name);
            $contact->setEmail($email);
            $contact->setMessage($message);
            $manager->persist($contact);
        }

        $manager->flush();
    }
}
