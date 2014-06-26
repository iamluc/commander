<?php

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Printer extends Command
{
    protected function configure()
    {
        $this
            ->setName('print')
            ->addArgument(
                'text',
                InputArgument::REQUIRED,
                'What do you want to print?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = $input->getArgument('text');

        $output->writeln($text);
    }
}