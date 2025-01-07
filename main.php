<?php

function addTask($input) {
    $description = implode(" ", $input);

    if ($description == null || ($description[0] != "\"" || $description[strlen($description) - 1] != "\"")) {
        echo "Invalid task\n";
        return;
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