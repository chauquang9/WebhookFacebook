<?php

namespace App\Http\Facade\WebHookUser;

use App\Http\Facade\AbstractEvent;
use App\Http\Facade\Constant;
use App\Http\Facade\InterfaceEvent;

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
