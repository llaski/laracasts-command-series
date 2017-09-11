<?php

namespace App;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CompleteTaskCommand extends Command
{
    use ShowTasks;

    public function configure()
    {
        $this->setName('complete')
            ->setDescription('Complete task by id.')
            ->addArgument('id', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');

        $this->database->query('delete from tasks where id = :id', compact('id'));

        $output->writeln('<info>Task completed</info>');

        $this->showTasks($output);
    }

}