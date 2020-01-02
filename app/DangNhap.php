<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class DangNhap extends Authenticatable implements JWTSubject
{
    protected $table = 'dang_nhap';

    protected $hidden = ['mat_khau'];

    public function getPasswordAttribute()
    {
    	return $this->mat_khau;
    }

    public function getJWTIdentifier()
    {
    	return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
    	return [];
    }
}
