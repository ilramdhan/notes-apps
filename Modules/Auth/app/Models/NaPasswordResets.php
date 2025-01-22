<?php

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Auth\Database\Factories\NaPasswordResetsFactory;

class NaPasswordResets extends Model
{
    public $timestamps = false;

    protected $table = 'na_password_resets';

    protected $fillable = [
        'napr_email',
        'napr_token',
        'napr_created_at',
    ];

    protected $casts = [
        'napr_created_at' => 'datetime',
    ];
}
