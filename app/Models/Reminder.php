<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Appointment;

class Reminder extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function appointment(): BelongsTo {
        return this->belongsTo(Appointment::class);
    }
}
