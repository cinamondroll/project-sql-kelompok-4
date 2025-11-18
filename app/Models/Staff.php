<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'address_id',
        'email',
        'store_id',
        'active',
        'username',
        'password',
        'last_update'
    ];

    protected $hidden = [
        'password',
    ];

    // Karena password sakila tidak di-hash:
    public function getAuthPassword()
    {
        return $this->password;
    }
}
