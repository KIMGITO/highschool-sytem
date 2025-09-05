<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    /** @use HasFactory<\Database\Factories\AssessmentFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'type',
        'term',
        'code',
        'description',
        'date',
        'grade_id',
        'created_by',
        'updated_by',
    ];
    protected $casts = [
        'date' => 'date',
    ];
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class, 'grade_id', 'grade_id');
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'assessment_subject', 'assessment_id', 'subject_id');
    }


    
}
