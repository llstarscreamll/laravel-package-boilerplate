<?php

namespace Llstarscreamll\LaravelPackageBoilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Llstarscreamll\LaravelPackageBoilerplate\Skeleton\SkeletonClass
 */
class LaravelPackageBoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-boilerplate';
    }
}
