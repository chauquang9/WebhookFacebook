<?php

namespace App\Http\Chatbot;

use Illuminate\Support\Facades\Http;

/**
 * Class Alexa
 * @package App\Http\Chatbot
 */
class Alexa extends AbstractBot implements InterfaceBot
{
    /**
     * @param string $text
     * @return mixed|string|void
     */
    public function question($text = 'hello')
    {
        return 'Alexa';
    }
}
