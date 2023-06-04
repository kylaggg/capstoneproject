<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormQuestions extends Model
{
    use HasFactory;

    protected $table = 'form_questions_2023_2024';

    protected $primaryKey = 'question_id';

    protected $fillable = [
        'form_type', 'table_initials', 'question', 'question_order'
    ];
}
