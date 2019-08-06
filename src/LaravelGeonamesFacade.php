<?php

namespace Webdcg\LaravelGeonames;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webdcg\LaravelGeonames\Skeleton\SkeletonClass
 */
class LaravelGeonamesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-geonames';
    }
}
