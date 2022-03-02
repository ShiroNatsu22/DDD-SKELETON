<?php

declare(strict_types=1);

namespace Skeleton\Apps\Skeleton\Controller\HealthCheck;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class HealthCheckGetController
{
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                'skeleton' => 'ok',
            ]
        );
    }
}
