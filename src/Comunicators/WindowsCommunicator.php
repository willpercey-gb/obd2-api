<?php

namespace UWebPro\Vehicle\Communicators;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use UWebPro\Vehicle\Uniform\CommunicatorInterface;

class WindowsCommunicator extends Standard implements CommunicatorInterface
{
    public function detectDevice(): self
    {
        $proc = new Process(['mode']);
        $proc->run(static function ($output) use ($proc) {
            if ($output === 'err') {
                throw new ProcessFailedException($proc);
            }
        });
        if ($proc->isSuccessful()) {
            dd($proc->getOutput());
        }
        return $this;
    }
}