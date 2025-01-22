<?php

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Auth\Database\Factories\NaPersonalTokensFactory;

class NaPersonalTokens extends Model
{
    protected $table = 'na_personal_tokens';

    protected $fillable = [
        'napt_name',
        'napt_token',
        'napt_abilities',
        'napt_last_used_at',
    ];

    protected $casts = [
        'napt_last_used_at' => 'datetime',
        'napt_abilities' => 'array',
    ];

    public function tokenable()
    {
        return $this->morphTo();
    }
}
