<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\EventAbstract;
use App\Http\Facebook\Constant;
use App\Http\Facebook\FacadeFacebook;
use App\Http\Facebook\GraphAPI\Comment;
use App\Http\Facebook\EventInterface;

/**
 * Class FeedEvent
 * @package App\Http\Facade\WebHookPage
 */
class FeedEvent extends EventAbstract implements EventInterface
{
    /**
     * @var string
     */
    public $event = 'feed';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_PAGE;

    /**
     * @param array $data
     * @return false|mixed|string
     */
    public function action(array $data)
    {
        try {
            $response = [];
            $dataFromHook = $data['entry'][0]['changes'][0]['value'];
            $item = $dataFromHook['item'];
            if($dataFromHook['verb'] == 'add') {
                switch ($item) {
                    case Constant::FACEBOOK_FEED_ITEM_COMMENT:
                        $commentId = $dataFromHook['comment_id'];
                        $senderId = $dataFromHook['from']['id'];
                        $message = $dataFromHook['message'];

                        //track item exists avoid loop in webhook facebook
                        if($dataFromHook['post_id'] === $dataFromHook['parent_id']) {
                            $botResponse = $this->bot->question($message);

                            /**
                             * @var Comment $comment
                             */
                            $comment = FacadeFacebook::comment();
                            $response = $comment->post($botResponse, $commentId, $senderId);
                        }

                        break;
                    case Constant::FACEBOOK_FEED_ITEM_REACTION:
                        $response = [];
                        break;

                    case Constant::FACEBOOK_FEED_ITEM_STATUS:
                        $postId = $dataFromHook['post_id'];
                        $message = $dataFromHook['message'];

                        /**
                         * @var Comment $comment
                         */
                        $comment = FacadeFacebook::comment();
                        $response = $comment->post($message, $postId);

                        break;
                    default:
                }
            }

            return $response;
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        } catch (\Exception $e) {
            echo $e->getMessage();
            die;
        }
    }
}
