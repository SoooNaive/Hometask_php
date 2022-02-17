<?php 

require_once 'lib/CommandInterface.php';

class Greetings implements CommandInterface {

	public function getName()
    {
        return 'greetings';
    }

    public function execute()
    {
        echo 'Hello, world!';
    }

    public function help()
    {
        return 'Выводит приветствие';
    }
}