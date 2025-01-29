<?php

function newEvent(&$events, $event) {
    if (isset($events[$event])) {
        $events[$event]++;     
    } else {
        $events[$event] = 1;
    }
}

function getContent($username, &$events) {
    $api = "https://api.github.com/users/" . $username . "/events";

    $options = [
        "http" => [
            "header" => [
                "User-Agent: PHP",
                "Authorization: key"
            ]
        ]
    ];

    $context = stream_context_create($options);

    $data = @file_get_contents($api, false, $context);

    if ($data === FALSE) {
        echo "Error fetching data";
        exit;
    }

    $data = json_decode($data, true);

    foreach($data as $activity) {
        newEvent($events, $activity["type"] . " - " . $activity["repo"]["name"]);
    } 

    print_r($events); 
}

function main() {
    $events = [];
    echo "> WELCOME TO GITHUB USER ACTIVITY \n";
    echo "> ENTER YOUR GITHUB USERNAME \n";
    $username = readline("> github-activity ");
    if ($username != null) getContent($username, $events);
}

main();
