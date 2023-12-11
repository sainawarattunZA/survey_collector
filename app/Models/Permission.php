<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends 
{

    use HasFactory, HasUlids;
    protected $table = 'permissions';
    protected $guarded = [];
}
