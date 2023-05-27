<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $primaryKey = 'account_id';
    protected $table = 'accounts';
    public $timestamps = false;

    protected $fillable = [
        'email', 'employee_number', 'default_password', 'password', 'password_changed', 'type', 'verification_code', 'first_login', 'status'
    ];

    protected $unique = [
        'email', 'employee_number'
    ];

    protected $nullable = [
        'password', 'verification_code'
    ];

    protected $attributes = [
        'password_changed' => 'false',
        'first_login' => 'true',
        'status' => 'activate'
    ];
}
