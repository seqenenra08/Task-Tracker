<?php

function addTask($input){
    $task = $input[1];
    if ($task == null) {
        echo "Invalid task\n";
        return;
    }
    $arraydata = [];
    $arraydata['id'] = rand(1, 10000);
    $arraydata['description'] = $task;
    $arraydata['status'] = 'to do';
    $arraydata['createAt'] = date('Y-m-d H:i:s');
    $arraydata['updateAt'] = date('Y-m-d H:i:s');
    $task = json_encode($arraydata);

    $json = file_get_contents("task.json");
    $data = json_decode($json, true);
    $data[] = $task;
    $json = json_encode($data);
    file_put_contents("task.json", $json);
}

function listTasks($input){
    $json = file_get_contents("task.json");
    $data = json_decode($json);
    foreach($data as $key => $task){
        echo $key + 1 . ". " . $task . "\n";
    }
}

function exitProgram(){
    echo "Bye!\n";
    return true;
}

function printInvalidCommand() {
    echo "Invalid command\n";
}

function checkInput($input){
    return match ($input[0]) {
        "add" => addTask($input),
        "list" => listTasks($input),
        "exit" => exitProgram(),
        default => printInvalidCommand(),
    };
}

$exit  = false;
echo "WELCOME TO TASK MANAGER \n";

while(!$exit){
    $inputUSer = readline();
    $inputUSer = explode(" ", $inputUSer);
    $exit = checkInput($inputUSer);
}


