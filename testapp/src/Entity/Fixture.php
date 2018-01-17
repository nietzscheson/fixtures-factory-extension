<?php

namespace Nietzscheson\FixturesFactoryDemoBundle\Entity;

class Fixture implements FixtureInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $fixture;

    /**
     * {@inheritdoc}
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId(int $id = null): void
    {
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getFixture(): string
    {
        return $this->fixture;
    }

    /**
     * {@inheritdoc}
     */
    public function setFixture(string $fixture = null): void
    {
        $this->fixture = $fixture;
    }
}