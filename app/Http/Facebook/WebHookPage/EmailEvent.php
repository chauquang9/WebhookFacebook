<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\EventAbstract;
use App\Http\Facebook\Constant;
use App\Http\Facebook\EventInterface;

/**
 * Class EmailEvent
 * @package App\Http\Facebook\WebHookPage
 */
class EmailEvent extends EventAbstract implements EventInterface
{
    /**
     * @var string
     */
    public $event = 'email';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_PAGE;
}
