<?php

namespace Nietzcheson\FixturesExtension\FixturesFactory;

use Doctrine\ORM\EntityManagerInterface;
use Nelmio\Alice\DataLoaderInterface;
use Fidry\AliceDataFixtures\Persistence\PersisterInterface;

class Factory implements FactoryInterface
{

    /**
     * @var EntityManagerInterface $em
     */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function create($class, $id, array $data)
    {
    }
}