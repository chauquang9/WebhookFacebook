<?php

namespace App\Http\Facade\Support;

interface TokenInterface
{
    /**
     * @return string
     */
    public function getAccessToken();
}
