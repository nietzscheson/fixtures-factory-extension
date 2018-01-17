<?php

namespace Nietzcheson\FixturesExtension\FixturesFactory;

interface FactoryInterface
{
    /**
     * @param string $entity
     * @param string $entityId
     * @param array $data
     */
    public function create($entity, $entityId, array $data);
}