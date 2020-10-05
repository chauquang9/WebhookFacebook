<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\AbstractEvent;
use App\Http\Facebook\Constant;
use App\Http\Facebook\InterfaceEvent;

/**
 * Class PhoneEvent
 * @package App\Http\Facade\WebHookPage
 */
class PhoneEvent extends AbstractEvent implements InterfaceEvent
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
