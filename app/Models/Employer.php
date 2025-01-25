<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $guarded = ['id'];
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function Job(){
        return $this->hasMany(Job::class);
    }
}
