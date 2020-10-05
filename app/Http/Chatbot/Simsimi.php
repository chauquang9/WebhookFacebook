<?php

namespace App\Http\Chatbot;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Simsimi
 * @package App\Http\Chatbot
 */
class Simsimi extends BotAbstract implements BotInterface
{
    /**
     * @param string $text
     * @return mixed|string|void
     */
    public function question($text = 'hello')
    {
        $response = Http::withHeaders(
            [
                'x-api-key' => 'vsDQhV-GGBHDlXOH4btb72dRmi86NJOc9UMT5foY',
                'Content-Type' => 'application/json',
            ]
        )->post('https://wsapi.simsimi.com/190410/talk',
            [
                'utext' => $text,
                'lang' => 'vi',
            ]
        );

        if(!empty($response) && $response['status'] == Response::HTTP_OK) {
            return $response['atext'];
        }

        return 'Simsimi: Do not understand';
    }
}
