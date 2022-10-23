<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserLogin extends Authenticatable
{
    protected $guarded = ['id'];
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'username';
    }

    public function Agent()
{
        return $this->belongsTo('Agents');
}
}
