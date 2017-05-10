<?php
//we have to set timezone to California
date_default_timezone_set('America/Los_Angeles');

//requiring FB PHP SDK
require '_includes/fb-sdk/src/facebook.php';

//initializing keys
$facebook = new Facebook(array(
    'appId'  => '230312933783758',
    'secret' => 'c75b2bba697687c2d9c6882549a6ef5e',
    'cookie' => true
));

/*
 *-Query the events
 *
 *-We will select: 
 *  -name, start_time, end_time, location, description
 *  -but there are other data that you can get on the event table 
 *      -https://developers.facebook.com/docs/reference/fql/event/
 *  
 *-As you will notice, we have TWO select statements here because
 *-We can't just do "WHERE creator = your_fan_page_id".
 *-Only eid is indexable in the event table
 *  -So we have to retrieve list of events by eids
 *      -And this was achieved by selecting all eid from
 *          event_member table where the uid is the id of your fanpage.
 *
 *-Yes, you fanpage automatically becomes an event_member once it creates an event
 *-start_time >= now() is used to show upcoming events only
 */
$fql = "SELECT 
            name, pic, start_time, end_time, location, description 
        FROM 
            event 
        WHERE 
            eid IN ( SELECT eid FROM event_member WHERE uid = 182673031865710 ) 
        AND 
            start_time >= now()
        ORDER BY 
            start_time desc";

$param  =   array(
    'method'    => 'fql.query',
    'query'     => $fql,
    'callback'  => ''
);

$fqlResult   =   $facebook->api($param);

?>