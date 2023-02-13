<?php

namespace Laltu\LaravelRolesMenu;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\LaravelRolesMenu\Skeleton\SkeletonClass
 */
class LaravelRolesMenuFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-roles-menu';
    }
}
