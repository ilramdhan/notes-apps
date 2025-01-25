<?php

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NaUsers extends Authenticatable
{
    use HasFactory;

    use HasApiTokens, Notifiable, SoftDeletes;

    protected $table = 'na_users';

    protected $fillable = [
        'nau_name',
        'nau_email',
        'nau_password',
        'nau_google_id',
        'nau_email_verified_at',
        'nau_profile_photo',
    ];

    protected $hidden = [
        'nau_password',
        'nau_google_id',
        'remember_token',
    ];

    protected $casts = [
        'nau_email_verified_at' => 'datetime',
    ];

    public function tokens()
    {
        return $this->morphMany(NaPersonalTokens::class, 'napt_tokenable');
    }

    public function getAuthPassword()
    {
        return $this->nau_password;
    }

}
