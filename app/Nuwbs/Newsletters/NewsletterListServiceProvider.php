<?php namespace Nuwbs\Newsletters;

use Illuminate\Support\ServiceProvider;

class NewsletterListServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->app->bind(
            'Nuwbs\Newsletters\NewsletterList',
            'Nuwbs\Newsletters\Mailchimp\NewsletterList'
        );
    }
}