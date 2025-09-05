<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    /** @use HasFactory<\Database\Factories\ResultFactory> */
    use HasFactory;
    protected $fillable = [
        'assessment_id',
        'student_id',
        'subject_id',
        'competence_id',
        'score',
        'scale_id',
        'remarks',
    ];

}
