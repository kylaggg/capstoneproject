<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $primaryKey = 'account_id';
    public $timestamps = false;

    protected $fillable = [
        'email', 'default_password', 'password', 'password_changed', 'type', 'verification_code', 'first_login', 'status'
    ];

    protected $unique = [
        'email'
    ];

    protected $nullable = [
        'password', 'verification_code'
    ];

    protected $attributes = [
        'password_changed' => 'false',
        'first_login' => 'true',
        'status' => 'active'
    ];

    public function employee(): HasOne{
        return $this->HasOne(Employees::class, 'account_id');
    }

}
