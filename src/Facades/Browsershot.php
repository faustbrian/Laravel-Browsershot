<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Browsershot.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Browsershot\Facades;

use Illuminate\Support\Facades\Facade;

class Browsershot extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Artisanry\Browsershot\Browsershot::class;
    }
}
