<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Appointment;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Employee;

class Service extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function appointments(): HasMany {
        return this->hasMany(Appointment::class);
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }
}
