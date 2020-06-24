<?php
class StopWatch{
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
        $this->startTime = date("Y-m-d h:i:sa");
    }
    public function startTime(){

    }
}