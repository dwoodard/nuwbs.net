<?php


namespace Nuwbs\Notifications;


interface ComingSoon {

    /**
     * @param $title
     * @param $body
     * @return mixed
     */
    public function notify($title, $body);
} 