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
        'email', 'password', 'type', 'verification_code', 'status'
    ];
}
