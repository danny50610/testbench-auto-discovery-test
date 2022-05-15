<?php

namespace Danny50610\TestbenchAutoDiscoveryTest;

use Silber\Bouncer\BouncerFacade;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        BouncerFacade::useRoleModel(MyRole::class);
    }
}
