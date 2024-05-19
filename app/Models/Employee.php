<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Appointment;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Service;

class Employee extends User
{
    use HasFactory;
    
    public $timestamps = false;

    public function appointments(): HasMany {
        return this->hasMany(Appointment::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
