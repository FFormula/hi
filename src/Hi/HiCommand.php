<?php

namespace Volosatov\Hi;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class HiCommand extends Command
{
    public function configure()
    {
        $this
            ->setName("Hi Command")
            ->setDescription("This command greets you")
            ->addArgument('user', InputArgument::REQUIRED, 'The name of the user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = $input->getArgument('user');
        $output->writeln('Hi, ' . $user);
    }
}