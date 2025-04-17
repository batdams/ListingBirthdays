<?php

class Birthdays
{
    private int $id;
    private string $name;
    private string $surname;
    private string $birthdayDate;

    // GETTERS
    public function getId() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getSurname() : string
    {
        return $this->surname;
    }
    public function getBirthdayDate() : string
    {
        return $this->birthdayDate;
    }

}
