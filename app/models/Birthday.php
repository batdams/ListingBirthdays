<?php

namespace models;

class Birthday
{
    private int $id;
    private string $name;
    private string $surname;
    private string $birthday;
    private int $app_user_id;
    private string $created_at;

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
    public function getBirthday() : string
    {
        return $this->birthday;
    }
    public function getAppUserId() : int
    {
        return $this->app_user_id;
    }

}
