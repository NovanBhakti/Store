<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class peserta extends Model implements AuthenticatableContract
{
    use HasFactory;

    protected $table = 'pesertas';
    protected $guarded = ['password_confirm'];
    //format nama peserta
    public function getFormattedNamaAttribute()
    {
        return ucwords(strtolower($this->attributes['firstname']));
    }

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    protected $rules = [
        'email' => 'required|email|unique:users,email',
        // ...
    ];
}
