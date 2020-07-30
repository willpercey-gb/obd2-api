<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunComTest extends Command
{
    use Output;

    protected function configure(): void
    {
        $this->setName('test:comm')
            ->setDescription('test obd comm')
            ->setHelp('');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->setOutput($output);

        (new \UWebPro\Vehicle\Communicators\WindowsCommunicator())->detectDevice();

        dd('finished');


        return 0;
    }
}
