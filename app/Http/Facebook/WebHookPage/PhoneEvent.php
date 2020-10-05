<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\EventAbstract;
use App\Http\Facebook\Constant;
use App\Http\Facebook\EventInterface;

/**
 * Class PhoneEvent
 * @package App\Http\Facade\WebHookPage
 */
class PhoneEvent extends EventAbstract implements EventInterface
{
    /**
     * @var string
     */
    public $event = 'phone';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_PAGE;
}
