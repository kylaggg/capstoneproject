<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $dates =  [
        'two_factor_expires_at'
    ];

    protected $fillable = [
        'two_factor_code',
        'two_factor_expires_at'
    ];

    public function generateTwoFactorCode(){
        $this->two_factor_code = rand(1000, 9999);
        $this->two_factor_expires_at = now()->addMinutes(10);
        $this->save();
    }

    public function resetTwoFactorCode(){
        $this->two_factor_code = null;
        $this->ttwo_factor_expires_at = null;
        $this->save();
    }
}
