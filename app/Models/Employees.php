<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $primaryKey = 'employee_id';

    public $timestamps = false;

    protected $fillable = ['account_id', 'employee_number', 'first_name', 'last_name', 'department_id', 'job_title', 'position', 'immediate_superior_id'];

    protected $unique = ['account_id', 'employee_number'];

    protected $nullable = ['department_id','job_title', 'position', 'immediate_superior_id'];

    public function account(): HasOne{
        return $this->HasOne(Accounts::class, 'account_id');
    }
}
