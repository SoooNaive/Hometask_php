#!/usr/bin/env php
<?php
require_once 'Executor.php';
$commandList = require_once 'commands.php';
$commandExecutor = new Executor($commandList);
if (count($argv) > 1) {
    array_shift($argv);
    $commandExecutor->executeCommand($argv);
} else {
    echo 'Для выполнения команды run нужны аргументы';
}