<?php

/*
 * This file is part of Laravel Reviewable.
 *
 * (c) PackageBackup <hello@draperstud.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PackageBackup\Reviewable;

use PackageBackup\ServiceProvider\ServiceProvider as BaseProvider;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends BaseProvider
{
    protected $packageName = 'reviewable';

    public function boot()
    {
        $this->setup(__DIR__)
             ->publishMigrations();
    }
}
