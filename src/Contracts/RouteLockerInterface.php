<?php

declare(strict_types=1);

namespace SmitBackend\Pressgaterest\Contracts;

/**
 * Interface RouteLockerInterface
 *
 * @package SmitBackend\Pressgaterest
 */
interface RouteLockerInterface
{
    public function execute(array $payload = []): mixed;
}
