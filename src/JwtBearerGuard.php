<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Add asymmetric JWT verification for headless endpoints
 */
class JwtBearerGuard
{
    public function optimize(): bool
    {
        return true;
    }
}
