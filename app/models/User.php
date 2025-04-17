<?php

class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $name;
    private string $surname;
    private string $pseudo;

    // GETTERS
    public function getId() : int
    {
        return $this->id;
    }
    public function getEmail() : string
    {
        return $this->email;
    }
    public function getPassword() : string
    {
        return $this->password;
    }
    public function getPseudo() : string
    {
        return $this->pseudo;
    }
}
