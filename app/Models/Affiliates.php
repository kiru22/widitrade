<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliates extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'surname',
        'email',
    ];
}
