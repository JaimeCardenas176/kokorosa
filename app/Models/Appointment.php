<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


use App\Models\Service;
use App\Models\User;
use App\Models\Employee;
use App\Models\Reminder;


class Appointment extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function service(): BelongsTo {
        return this->belongsTo(Service::class);
    }

    public function user(): BelongsTo {
        return this->belongsTo(User::class);
    }

    public function employee(): BelongsTo {
        return this->belongsTo(Employee::class);
    }

    public function reminder(): HasOne {
        return this->hasOne(Reminder::class);
    }
}
