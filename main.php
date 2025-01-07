<?php

function addTask($input) {
    $description = implode(" ", $input);

    if ($description == null || ($description[0] != "\"" || $description[strlen($description) - 1] != "\"")) {
        printInvalidCommand();
        return false;
    }

    $description = substr($description, 1, -1);
    $arraydata = [
        'id' => rand(1, 10000),
        'description' => $description,
        'status' => 'to do',
        'createAt' => date('Y-m-d H:i:s'),
        'updateAt' => date('Y-m-d H:i:s')
    ];

    $json = file_get_contents("task.json");
    $data = json_decode($json, true);

    if ($data === null) {
        $data = [];
    }

    $data[] = $arraydata;

    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("task.json", $json);
    echo "Tarea agregada exitosamente.\n";
    return false;
}

function listTasks() {
    $json = file_get_contents("task.json");
    $data = json_decode($json, true);

    if ($data === null || empty($data)) {
        echo "No hay tareas para mostrar.\n";
        return;
    }

    foreach ($data as $index => $task) {
        echo "Tarea " . ($index + 1) . ":\n";
        foreach ($task as $key => $value) {
            echo "  $key: $value\n";
        }
        echo "---------------------\n";
    }

    return false;
}

function updateTask($input){
    if($input[0] == null || intval($input[0]) < 1){
        printInvalidCommand();
        return false;
    }

    $id = $input[0];
    $description = $input;
    array_shift($description);
    $description = implode(" ", $description);

    if ($description == null || ($description[0] != "\"" || $description[strlen($description) - 1] != "\"")) {
        printInvalidCommand();
        return false;
    }

    $description = substr($description, 1, -1);

    $json = file_get_contents("task.json");
    $data = json_decode($json, true);

    if ($data === null || empty($data)) {
        echo "No hay tareas para mostrar.\n";
        return;
    }

    foreach($data as &$task){
        if($task['id'] == $id){
            $task['description'] = $description;
            $task['updateAt'] = date('Y-m-d H-i-s');
        }
    }

    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("task.json", $json);
    echo "Tarea actualizada exitosamente.\n";
    return false;
}

function exitProgram() {
    echo "Bye!\n";
    return true;
}

function printInvalidCommand() {
    echo "Invalid command\n";
}

function checkInput($input) {
    return match ($input[0]) {
        "add" => addTask(array_slice($input, 1)),
        "list" => listTasks(),
        "update" => updateTask(array_slice($input, 1)),
        "exit" => exitProgram(),
        default => printInvalidCommand(),
    };
}

function main(){
    $exit  = false;
    echo "WELCOME TO TASK MANAGER \n";

    while (!$exit) {
        $inputUser = readline("> ");
        $inputUser = explode(" ", $inputUser);
        $exit = checkInput($inputUser);
    }
}

main();