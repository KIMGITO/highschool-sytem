<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    /** @use HasFactory<\Database\Factories\StreamFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'denote',
        'grade_id',
        'description',
        'teacher',
        'created_bt',
        'updated_by',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
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

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
