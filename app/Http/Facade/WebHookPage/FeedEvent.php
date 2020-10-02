<?php

namespace App\Http\Facade\WebHookPage;

use App\Http\Facade\AbstractEvent;
use App\Http\Facade\Constant;
use App\Http\Facade\FacadeFacebook;
use App\Http\Facade\GraphAPI\Comment;
use App\Http\Facade\InterfaceEvent;
use App\Model\LogReplyFacebook;

/**
 * Class FeedEvent
 * @package App\Http\Facade\WebHookPage
 */
class FeedEvent extends AbstractEvent implements InterfaceEvent
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
                        $object = LogReplyFacebook::where('sender_id', $senderId)->where('message', $message)->first();
                        if (empty($object)) {
                            /**
                             * @var Comment $comment
                             */
                            $comment = FacadeFacebook::comment();
                            $response = $comment->post($message, $commentId, $senderId);
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
