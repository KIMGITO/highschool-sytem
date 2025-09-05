<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'core',
        'description',
        'credits',
        'department_id',
        'created_by',
        'updated_by',
    ];
    protected $casts = [
        'core' => 'boolean',
        'credits' => 'integer',
    ];
    

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function creator(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater(){
        return $this->belongsTo(User::class, 'updated_by');
    }

    
}
