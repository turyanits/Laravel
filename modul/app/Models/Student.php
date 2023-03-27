<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course',
        'specialty',
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
