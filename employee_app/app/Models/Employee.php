<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'position', 'email', 'phone', 'joined_at',
    ];

    protected $casts = [
        'joined_at' => 'date',
    ];
}
