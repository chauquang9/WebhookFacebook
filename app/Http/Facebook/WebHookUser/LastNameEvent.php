<?php

namespace App\Http\Facebook\WebHookUser;

use App\Http\Facebook\EventAbstract;
use App\Http\Facebook\Constant;
use App\Http\Facebook\EventInterface;

/**
 * Class LastNameEvent
 * @package App\Http\Facade\WebHookUser
 */
class LastNameEvent extends EventAbstract implements EventInterface
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
