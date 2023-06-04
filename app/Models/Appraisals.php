<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Appraisals extends Model
{
    use HasFactory;

    protected $table = 'appraisals_2023_2024';
    protected $primaryKey = 'appraisal_id';
    public $timestamps = true;

    protected $fillable = [
        'evaluation_type',
        'employee_id',
        'evaluator_id',
        'date_submitted',
        'status',
        'signature'
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employees::class, 'employee_id')->with('department');
    }

    public function evaluator(): BelongsTo
    {
        return $this->belongsTo(Employees::class, 'evaluator_id')->with('department');
    }
}