<?php

namespace App;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyCommand
{
    protected $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;

        parent::__construct();
    }

}