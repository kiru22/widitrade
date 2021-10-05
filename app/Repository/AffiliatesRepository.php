<?php

namespace App\Repository;

use App\DTO\AffiliatesCreateDTO;
use App\Models\Affiliates;
use Faker\Provider\Uuid;

class AffiliatesRepository
{
    public function create(AffiliatesCreateDTO $affiliatesCreateDTO)
    {
        return Affiliates::create([
            "id" => Uuid::uuid(),
            "name" => $affiliatesCreateDTO->name(),
            "surname" => $affiliatesCreateDTO->surname(),
            "email" => $affiliatesCreateDTO->email()
        ]);
    }

    public function __invoke(AffiliatesCreateDTO $affiliatesCreateDTO)
    {
        return Affiliates::create([
            "id" => Uuid::uuid(),
            "name" => $affiliatesCreateDTO->name(),
            "surname" => $affiliatesCreateDTO->surname(),
            "email" => $affiliatesCreateDTO->email()
        ]);
    }
}
