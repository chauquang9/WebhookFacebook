<?php


namespace App\Http\Chatbot;


interface BotInterface
{
    /**
     * @param $text
     * @return mixed
     */
    public function question($text);

    /**
     * @return mixed
     */
    public function teach();
}
