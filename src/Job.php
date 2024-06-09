<?php

namespace Gbleijenberg\SetJob;

class Job
{
    private string $username;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function CleanUp($usname): string
    {
        $usname = str_replace('ö', 'oe', $usname);
        $usname = str_replace('Ö', 'oe', $usname);
        $usname = str_replace('ü', 'ue', $usname);
        $usname = str_replace('Ü', 'ue', $usname);

        return $usname;
    }

    public function setUsername(string $fname, string $lname)
    {
        $uname = strtolower(substr($fname, 0 ,1)) . strtolower($lname);
        $uname = $this->CleanUp($uname);
        $this->username = $uname;
    }


}