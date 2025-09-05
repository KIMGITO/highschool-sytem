<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'subject_id',
        'publisher',
        'author',
        'photo_path',
        'description',
        'crated_by',
        'updated_by',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
}

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
    public function updater()
    {
        return $this->belongsTo(User::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'book_grade', 'book_id', 'grade_id');
    }
    // TODO:  crate book_grade table
}
