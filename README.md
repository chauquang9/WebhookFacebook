## About Subscribed App

The "https://developers.facebook.com/apps/323277902069047/webhooks/" page did not worked when we were subscribed app
==> we need to register through by Graph API

1. Go to link "https://developers.facebook.com/tools/explorer/"
2. Get all list subscribed ==> method GET vs link {page_id}/subscribed_apps
3. we want to change subscribed_fields ==> method POST vs link {page_id}/subscribed_apps
JSON
```
{
    "subscribed_fields": 
        [
            "messages",
            "messaging_postbacks",
            "messaging_optins",
            "feed",
            "company_overview"
        ]
}
```

## About Long Live Token
https://developers.facebook.com/docs/facebook-login/access-tokens/refreshing/

## About App
- the project we should use <strong>ngrok</strong> to debug
- Run ngrok : ``./ngrok http 8000``
- Debug : http://localhost:4040/inspect/http

## Add one webhook in facebook
1. Go to filesystem.php and Constant
2. Create new route with method GET and POST

