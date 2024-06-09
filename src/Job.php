<?php

namespace Gbleijenberg\SetJob;

class Job
{
    private string $username;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $fname, string $lname)
    {
        $uname = strtolower(substr($fname, 0 ,1)) . strtolower($lname);
        $uname->CleanUp();
        $this->username = $uname;
    }

    public function CleanUp($usname)
    {
        $usname = str_replace('ö', 'oe', $usname);
        $usname = str_replace('ü', 'ue', $usname);
    }
}