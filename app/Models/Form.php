<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory,HasUlids;

    protected $casts = [
        'content' => 'array',
    ];

    protected $fillable = [
        'form_id',
        'form',
        'created_at',
        'updated_at',
    ];

    public function form(){
        return $this->belongsTo(FormTemplate::class);
    }
}
