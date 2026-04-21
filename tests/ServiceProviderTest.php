<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Commentable.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Tests\Commentable;

class ServiceProviderTest extends AbstractTestCase
{
    public function testServiceProviderIsLoaded(): void
    {
        $this->assertTrue(
            $this->app->providerIsLoaded(\Artisanry\Commentable\CommentableServiceProvider::class)
        );
    }
}
