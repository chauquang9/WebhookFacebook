<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('verifyTokenOnPage', function (Request $request) {
    $challenge = $request->query->get('hub_challenge');
    $verify_token = $request->query->get('hub_verify_token');

    if ($verify_token == \App\Http\Facebook\Constant::VERIFY_TOKEN_WEBHOOK) {
        echo $challenge;
    }
});

Route::post('verifyTokenOnPage', function (Request $request) {
    $response = [];
    $files = \Illuminate\Support\Facades\Storage::disk('webHookPage')->allFiles();
    $data = $request->request->all();

    //event page
    if(isset($data['entry'][0]['changes'])) {
        $field = $data['entry'][0]['changes'][0]['field'];
        foreach ($files as $file) {
            $class = \App\Http\Facebook\Constant::DIRECTORY_FACADE_PAGE['namespace'] . '\\' . pathinfo($file)['filename'];
            $class = new $class;
            $event = $class->event;
            if($field == $event) {
                $response = $class->action($data);
            }
        }

        if(empty($response)) {
            $response['message'] = 'Missing Event';
        }
    }

    //messenger
    if(isset($data['entry'][0]['messaging'])) {
        $isWatermark = !empty($data['entry'][0]['messaging'][0]['delivery']['watermark']) ? TRUE : FALSE;
        $message = !empty($data['entry'][0]['messaging'][0]['message']['text']) ? $data['entry'][0]['messaging'][0]['message']['text'] : '';
        $sender = !empty($data['entry'][0]['messaging'][0]['sender']['id']) ? $data['entry'][0]['messaging'][0]['sender']['id'] : '';

        if(!$isWatermark) {
            /**
             * @var \App\Http\Facebook\GraphAPI\Messenger $messenger
             */
            $messenger = \App\Http\Facebook\FacadeFacebook::messenger();

            $response = $messenger->sendMessageToUser($message, $sender);
        }
    }

    return response()->json($response);
});

Route::get('verifyTokenOnUser', function (Request $request) {
    $challenge = $request->query->get('hub_challenge');
    $verify_token = $request->query->get('hub_verify_token');

    if ($verify_token == \App\Http\Facebook\Constant::VERIFY_TOKEN_WEBHOOK) {
        echo $challenge;
    }
});

Route::post('verifyTokenOnUser', function (Request $request) {
    $response = [];
    $files = \Illuminate\Support\Facades\Storage::disk('webHookUser')->allFiles();
    $data = $request->request->all();

    //event user
    if(isset($data['entry'][0]['changed_fields'])) {
        $field = $data['entry'][0]['changed_fields'][0];
        foreach ($files as $file) {
            $class = \App\Http\Facebook\Constant::DIRECTORY_FACADE_USER['namespace'] . '\\' . pathinfo($file)['filename'];
            $class = new $class;
            $event = $class->event;
            if($field == $event) {
                $response = $class->action($data);
            }
        }

        if(empty($response)) {
            $response['message'] = 'Missing Event';
        }
    }

    return response()->json($response);
});

Route::get('verifyTokenOnPermission', function (Request $request) {
    $challenge = $request->query->get('hub_challenge');
    $verify_token = $request->query->get('hub_verify_token');

    if ($verify_token == \App\Http\Facebook\Constant::VERIFY_TOKEN_WEBHOOK) {
        echo $challenge;
    }
});

Route::post('verifyTokenOnPermission', function (Request $request) {
    $response = [];
    $files = \Illuminate\Support\Facades\Storage::disk('webHookPermission')->allFiles();
    $data = $request->request->all();

    //event user
    if(isset($data['entry'][0]['changed_fields'])) {
        $field = $data['entry'][0]['changed_fields'][0];
        foreach ($files as $file) {
            $class = \App\Http\Facebook\Constant::DIRECTORY_FACADE_PERMISSION['namespace'] . '\\' . pathinfo($file)['filename'];
            $class = new $class;
            $event = $class->event;
            if($field == $event) {
                $response = $class->action($data);
            }
        }

        if(empty($response)) {
            $response['message'] = 'Missing Event';
        }
    }

    return response()->json($response);
});

