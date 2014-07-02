<?php

namespace Nuwbs\NewsLetters\Mailchimp;


use Mailchimp;
use Nuwbs\NewsLetters\NewsletterList as NewsletterListInterface;


class NewsletterList implements NewsletterListInterface
{

    /**
     * @var
     */
    protected $mailchimp;

    protected $list = [
//        'lessonSubscribers' => '000',
        'comingSoon' => 'c6763e8b8d'
    ];

    /**
     * @param Mailchimp $mailchimp
     */
    function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * Subscribe a user to a Mailchimp list
     *
     * @param $listName
     * @param $email
     * @return mixed
     */
    public function subscribeTo($listName, $email)
    {
        return $this->mailchimp->lists->subscribe(
            $this->list[$listName],
            ['email' => $email],
            null, //merge vars
            'html',
            false, // require double opt in?
            true //update existing customers?
        );
    }

    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function unsubscribeFrom($list, $email)
    {
        return $this->mailchimp->lists->subscribe(
            $this->list[$listName],
            ['email' => $email],
            false, //delete the member permanently?
            false, // send a goodbye email?
            false //send unsubscribe notification email?
        );
    }
}