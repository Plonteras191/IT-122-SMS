<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function faculty()
    {
        return $this->hasMany(Faculty::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
