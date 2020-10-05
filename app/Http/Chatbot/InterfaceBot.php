<?php


namespace App\Http\Chatbot;


interface InterfaceBot
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
