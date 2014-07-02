<?php
/**
 * Created by PhpStorm.
 * User: dustinwoodard
 * Date: 7/1/14
 * Time: 10:58 PM
 */

namespace Nuwbs\Notifications\Mailchimp;


use Mailchimp;
use Nuwbs\Notifications\ComingSoon as ComingSoonInterface;

class ComingSoon implements ComingSoonInterface
{
    /**
     * List ID
     */
    const COMING_SOON_ID = 'c6763e8b8d';
    protected $mailchimp;

    function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * @param $title
     * @param $body
     * @return mixed
     */
    public function notify($title, $body)
    {
        /** @var $options Array */
        $options = [
            'list_id' => self::COMING_SOON_ID,
            'subject' => 'Coming Soon: ' . $title,
            'from_name' => "NUWBS",
            'from_email' => 'admin@nuwbs.net',
            'to_name' => 'Nuwbs Subscriber'
        ];

        /** @var $content Array */
        $content = [
            'html'  => $body,
            'text' => strip_tags($body)
        ];

        // Create a new campaign
        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

        $this->mailchimp->campaigns->send($campaign['id']);
    }
}