<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    /** @use HasFactory<\Database\Factories\LevelFactory> */
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
    public function grades(){
        return $this->hasMany(Grade::class);
    }
    public function students(){
        return $this->hasManyThrough(Student::class, Grade::class);
    }
}
