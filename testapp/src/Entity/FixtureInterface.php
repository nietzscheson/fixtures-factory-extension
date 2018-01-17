<?php

declare(strict_types=1);

namespace Nietzscheson\FixturesFactoryDemoBundle\Entity;

interface FixtureInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @param int|null
     */
    public function setId(int $id = null): void;

    /**
     * @return null|string
     */
    public function getFixture(): ?string;

    /**
     * @param string|null
     */
    public function setFixture(string $fixture = null): void;
}