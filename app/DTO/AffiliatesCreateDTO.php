<?php

namespace App\DTO;

class AffiliatesCreateDTO
{
    private $name;
    private $surname;
    private $email;

    public function __construct(string $name, string $surname, string $email)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    public static function fromArray(array $array)
    {
        return new self($array["name"], $array["surname"], $array["email"]);
    }

    public function name(): string
    {
        return $this->name;
    }

    public function surname(): string
    {
        return $this->surname;
    }

    public function email(): string
    {
        return $this->email;
    }
}
