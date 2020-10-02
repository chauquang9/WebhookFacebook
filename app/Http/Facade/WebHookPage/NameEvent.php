<?php

namespace App\Http\Facade\WebHookPage;

use App\Http\Facade\AbstractEvent;
use App\Http\Facade\Constant;
use App\Http\Facade\InterfaceEvent;

/**
 * Class NameEvent
 * @package App\Http\Facade\WebHookPage
 */
class NameEvent extends AbstractEvent implements InterfaceEvent
{
    /**
     * @var string
     */
    public $event = 'name';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_PAGE;

    /**
     * @param array $data
     * @return mixed|string
     */
    public function getMessage(array $data)
    {
        return $data['entry'][0]['changes'][0]['value'];
    }
}
