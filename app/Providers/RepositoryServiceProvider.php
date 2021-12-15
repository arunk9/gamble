<?php


namespace App\Providers;

use App\Repositories\DistanceRepository;
use App\Repositories\DistanceRepositoryInterface;
use Illuminate\Support\ServiceProvider;

/**
 * Custom service provider class for binding an interface with a
 * concrete class. App will then inject the instance of dependent object
 * at runtime based on binding.
 *
 *
 * Class RepositoryServiceProvider
 * @package App\Providers
 *
 * @author akadiveru
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the app bindings here
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(DistanceRepositoryInterface::class, DistanceRepository::class);
    }

}
