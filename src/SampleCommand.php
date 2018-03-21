<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SampleCommand extends Command {
    
    /**
     * Configure the command options.
     *
     * @return void
     */
    protected function configure()
    {
        $this->setName('foo')
            ->addOption('bar', 'b', InputOption::VALUE_REQUIRED, 'This is description of bar option.', null)
            ->setDescription('This is description of `foo` command.');
    }
    
    /**
     * Execute the command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $opt = $input->getOption('bar');
        
        if ($opt) {
            $output->writeln('I get your option: ' . $opt . '.');
        } else {
            $output->writeln('Thanks for symfony team, it\'s a nice project.');
        }
        
        exit(0);
    }
}