<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\AbstractEvent;
use App\Http\Facebook\Constant;
use App\Http\Facebook\InterfaceEvent;

/**
 * Class CompanyOverviewEvent
 * @package App\Http\Facade\WebHookPage
 */
class CompanyOverviewEvent extends AbstractEvent implements InterfaceEvent
{
    /**
     * @var string
     */
    public $event = 'company_overview';

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
