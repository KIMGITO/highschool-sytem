<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /** @use HasFactory<\Database\Factories\GradeFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'denote',
        'level_id',
        'description',
        'teacher',
        'created_bt',
        'updated_by',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function classTeacher(){
        return $this->belongsTo(User::class, 'teacher');
    }

    public function creator(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updater(){
        return $this->belongsTo(User::class, 'updated_by');
    }

    // public function students()
    // {
    //     return $this->hasMany(Student::class);
    // }
}
