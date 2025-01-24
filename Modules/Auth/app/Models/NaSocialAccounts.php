<?php

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Auth\Database\Factories\NaSocialAccountsFactory;

class NaSocialAccounts extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(NaUsers::class);
    }
}
