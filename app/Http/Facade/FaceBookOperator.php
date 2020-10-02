<?php

namespace App\Http\Facade;

use App\Http\Facade\GraphAPI\Comment;
use App\Http\Facade\GraphAPI\Messenger;
use App\Http\Facade\GraphAPI\Page;
use App\Http\Facade\Support\Token;

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
