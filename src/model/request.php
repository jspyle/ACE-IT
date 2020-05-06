<?php

class timeTableInfo
{
    private $timeslotId;
    private $timeslotDesc;

    public function __construct($timeslotId, $timeslotDesc)
    {
        $this->timeslotId = $timeslotId;
        $this->timeslotDesc = $timeslotDesc;
    }

    public function getTimeslotId()
    {
        return $this->timeslotId;
    }

    public function setTimeslotId($timeslotId)
    {
        $this->timeslotId = $timeslotId;
    }

    public function getTimeslotDesc()
    {
        return $this->timeslotDesc;
    }

    public function setTimeslotDesc($timeslotDesc)
    {
        $this->timeslotDesc = $timeslotDesc;
    }
}
