<?php

use Carbon\Carbon;

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
$events_raw = [];

// Get the events from Facebook.
try {
    $response = $fb->get('/' . $fb_page_id . '/events');
    $json = json_decode($response->getBody());
    $events_raw = $json->data;
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
    $events_errors = true;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
    $events_errors = true;
}

// We're going to only add events that are happening in the future.
$now = Carbon::now();
foreach($events_raw as $event) {
    $event_start = new Carbon($event->start_time);
    if ($event_start->gte($now)) {
        array_unshift($events, $event);
    }
}

// We're going to only allow five events to display.
if (!empty($events) && count($events) > 5) {
    $events = array_slice($events, 0, 5);
}
