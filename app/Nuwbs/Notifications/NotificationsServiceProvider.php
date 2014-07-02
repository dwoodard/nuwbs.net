<?php namespace Nuwbs\Notifications;

use Illuminate\Support\ServiceProvider;


class NotificationsServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Nuwbs\Notifications\ComingSoon',
            'Nuwbs\Notifications\Mailchimp\LessonPublished'
        );
    }
}