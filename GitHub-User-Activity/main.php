<?php

function getContent($username) {
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
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function main(){
    echo "> WELCOME TO GITHUB USER ACTIVITY \n";
    echo "> ENTER YOUR GITHUB USERNAME \n";
    $username = readline("> github-activity ");
    if($username != null) getContent($username);
}

main();