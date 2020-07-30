<?php


namespace UWebPro\Vehicle\Uniform;


interface OSMap
{
    public function __construct();

    public function __call($name, $arguments);
}