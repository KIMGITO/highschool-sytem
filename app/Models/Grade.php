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
        'description',
        'created_by',
        'updated_by',
    ];
    public function creator(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updater(){
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function streams(){
        return $this->hasMany(Stream::class);
    }
    public function students(){
        return $this->hasManyThrough(Student::class, Stream::class);
    }

    public function books(){
        return $this->belongsToMany(Book::class, 'book_grade', 'grade_id', 'book_id');
    }
}
