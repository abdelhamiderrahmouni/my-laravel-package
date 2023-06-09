<?php

namespace Abdelhamiderrahmouni\Cart;

use Abdelhamiderrahmouni\Cart\Commands\CartCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CartServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('my-laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my-laravel-package_table')
            ->hasCommand(CartCommand::class);
    }
}
