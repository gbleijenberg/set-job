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
        $this->username = strtolower(substr($fname, 0 ,1)) . strtolower($lname);
    }
}