<?php

namespace Adriatic\PHPAkademija\DesignPattern\Bridge\InitialSolution;

use Adriatic\PHPAkademija\DesignPattern\Bridge\TvImplementations\SamsungTv;

class SamsungControl implements RemoteControl
{
    private $samsungTv;

    public function __construct(SamsungTv $samsungTv)
    {
        $this->samsungTv = $samsungTv;
    }

    public function on()
    {
        $this->samsungTv->startUp();
    }

    public function off()
    {
        $this->samsungTv->turnOff();
    }

    public function setChannel(int $channel)
    {
        $this->samsungTv->tuneChannel($channel);
    }
}
