<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    protected $fillable = [
        'salutation',
        'phone',
        'address',
        'hire_date',
        'salary',
        'status',
        'photo',
        'bio',
        'social_links',
        'department_id',
        'user_id',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'social_links' => 'array',
        'hire_date' => 'date',
        'salary' => 'decimal:2',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
