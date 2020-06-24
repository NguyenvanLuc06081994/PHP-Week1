<?php

class StopWatch
{
    private $startTime;

    public function getStartTime()
    {
        return $this->startTime;
    }


    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }


    public function getEndTime()
    {
        return $this->endTime;
    }


    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    private $endTime;

    public function __construct()
    {
        $this->startTime = date(" h:i:s");

    }

    public function start()
    {
         $this->setStartTime(date("h:i:s"));
    }

    public function stop()
    {
        $this->setEndTime(date("h:i:s"));
    }

    public function getElapsed()
    {
        $result = $this->getEndTime()-> diff($this->getStartTime());
        $result->format("%h:%i:%s");
        return $result;
    }
}