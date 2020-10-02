<?php

namespace App\Http\Facade\WebHookPage;

use App\Http\Facade\AbstractEvent;
use App\Http\Facade\Constant;
use App\Http\Facade\InterfaceEvent;

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
