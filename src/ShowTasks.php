<?php

namespace App;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\OutputInterface;

trait ShowTasks {

    protected function showTasks(OutputInterface $output)
    {
        if ( ! $tasks = $this->database->fetchAll('tasks')) {
            $output->writeln('<info>No Tasks</info>');
            return;
        }

        $table = new Table($output);
        $table->setHeaders(['Id', 'Description'])
            ->setRows($tasks)
            ->render();
    }
}