<?php

namespace App\Http\Facebook\WebHookUser;

use App\Http\Facebook\AbstractEvent;
use App\Http\Facebook\Constant;
use App\Http\Facebook\InterfaceEvent;

/**
 * Class LastNameEvent
 * @package App\Http\Facade\WebHookUser
 */
class LastNameEvent extends AbstractEvent implements InterfaceEvent
{
    /**
     * @var string
     */
    public $event = 'last_name';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_USER;
}
