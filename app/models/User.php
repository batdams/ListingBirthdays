<?php

namespace models;

class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $name;
    private string $surname;
    private string $pseudo;
    private string $role;
    private string $created_at;

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
    public function getName() : string
    {
        return $this->name;
    }
    public function getSurname() : string
    {
        return $this->surname;
    }
    public function getPseudo() : string
    {
        return $this->pseudo;
    }
    public function getRole() : string
    {
        return $this->role;
    }
    // Methodes
    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }
}
