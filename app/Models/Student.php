<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'adm_no',
        'first_name',
        'last_name',
        'sir_name',
        'gender',
        'date_of_birth',
        'address',
        'enrollment_year',
        'status',
        'grade_id',
        'created_by',
        'updated_by',

    ];
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
