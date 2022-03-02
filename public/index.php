<?php

use Skeleton\Apps\Skeleton\src\SkeletonKernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new SkeletonKernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
