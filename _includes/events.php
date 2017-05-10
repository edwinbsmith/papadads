<?php
/**
 * Papa Dads Info
 *
 */

$app_id = getenv('FB_APP_ID');
$app_secret = getenv('FB_APP_SECRET');
$fb_basic_token = $app_id . '|' . $app_secret;
$fb_page_id = getenv('FB_PAGE_ID');

$fb = new \Facebook\Facebook([
    'app_id' => $app_id,
    'app_secret' => $app_secret,
    'default_graph_version' => 'v2.9',
    'default_access_token' => $fb_basic_token,
]);

$events_errors = false;
$events = [];

try {
    $response = $fb->get('/' . $fb_page_id . '/events');
    $json = json_decode($response->getBody());
    $events = $json->data;
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
    $events_errors = true;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
    $events_errors = true;
}

if (!empty($events) && count($events) > 5) {
    $events = array_slice($events, 0, 5);
}
$events = array_reverse($events);
