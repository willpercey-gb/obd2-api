<?php

namespace UWebPro\Vehicle;

use UWebPro\Vehicle\Exceptions\OSException;
use UWebPro\Vehicle\Uniform\CommunicatorInterface;
use UWebPro\Vehicle\Uniform\OSMap;

class Communicator implements OSMap
{
    public const WINDOWS = 1;
    public const OSX = 2;
    public const LINUX = 3;

    public $OS;

    public function __construct()
    {
        if (stripos(strtoupper(PHP_OS), 'WIN') === 0) {
            $this->OS = 1;
        } elseif (stripos(strtoupper(PHP_OS), 'DARWIN') === 0) {
            $this->OS = 2;
        } elseif (stripos(strtoupper(PHP_OS), 'LINUX') === 0) {
            $this->OS = 3;
        } else {
            $this->OS = 0;
        }
    }

    public function setOS(int $os): self
    {
        $this->OS = $os;
        return $this;
    }

    public function __call($name, $arguments): CommunicatorInterface
    {
        if ($this->OS === self::WINDOWS) {

        }
        if ($this->OS === self::OSX) {

        }
        if ($this->OS === self::LINUX) {

        }
        throw new OSException();
    }
}