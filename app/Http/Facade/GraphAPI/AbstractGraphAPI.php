<?php

namespace App\Http\Facade\GraphAPI;

use App\Http\Facade\FacadeFacebook;
use App\Http\Facade\Support\ConstructFacebook;
use App\Http\Facade\Support\Token;

/**
 * Class AbstractGraphAPI
 * @package App\Http\Facade\GraphAPI
 */
abstract class AbstractGraphAPI
{
    /**
     * @var \Facebook\Facebook
     */
    protected $fb;

    /**
     * @var string
     */
    protected $accessToken;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        /**
         * @var Token $token
         */
        $token = FacadeFacebook::token();
        $accessToken = $token->getAccessToken();

        $this->fb = ConstructFacebook::construct();
        $this->accessToken = $accessToken;
    }
}
