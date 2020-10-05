<?php

namespace App\Http\Facebook;

use App\Http\Facebook\GraphAPI\Comment;
use App\Http\Facebook\GraphAPI\Messenger;
use App\Http\Facebook\GraphAPI\Page;
use App\Http\Facebook\Support\Token;

/**
 * Class FaceBookOperator
 * @package App\Http\Facade
 */
class FaceBookOperator
{
    /**
     * @return Token
     */
    public function token() : Token
    {
        return new Token();

    }

    /**
     * @return Messenger
     */
    public function messenger() : Messenger
    {
        return new Messenger();
    }

    /**
     * @return Page
     */
    public function page() : Page
    {
        return new Page();
    }

    /**
     * @return Comment
     */
    public function comment() : Comment
    {
        return new Comment();
    }
}
