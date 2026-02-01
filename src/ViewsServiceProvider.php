<?php

declare(strict_types=1);

namespace WPZylos\Framework\Views;

use WPZylos\Framework\Core\Contracts\ApplicationInterface;
use WPZylos\Framework\Core\ServiceProvider;

/**
 * Views service provider.
 *
 * @package WPZylos\Framework\Views
 */
class ViewsServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register(ApplicationInterface $app): void
    {
        parent::register($app);

        $this->singleton(ViewFactory::class, fn() => new ViewFactory(
            $app->context(),
            $app->paths()->path('@views')
        ));

        $this->singleton('view', fn() => $this->make(ViewFactory::class));
    }
}
