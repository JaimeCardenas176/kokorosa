<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Customer extends User
{
    use HasFactory;
    
    public $timestamps = false;
}
