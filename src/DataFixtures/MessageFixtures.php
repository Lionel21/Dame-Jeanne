<?php

namespace App\DataFixtures;

use App\Entity\Message;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MessageFixtures extends Fixture
{
    const MESSAGES = [
        'Food' => [
            'text' => 'On aime trouver et servir des bons produits',
            'imageName' => 'people.webp',
            'updated_at' => '',
        ],
        'People' => [
            'text' => 'Nous ce qu\'on aime c\'est rencontrer des gens',
            'imageName' => 'people.webp',
            'updated_at' => '',
        ],
        'Taste' => [
            'text' => 'Nous ce qu\'on aime c\'est aussi faire des découvertes',
            'imageName' => 'people.webp',
            'updated_at' => '',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::MESSAGES as $message => $data) {
            $message = new Message();
            $message->setText($data['text']);
            $message->setImageName('');
            $message->setUpdatedAt(new DateTime());

            $manager->persist($message);
        }

        $manager->flush();
    }
}
