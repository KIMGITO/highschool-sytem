<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
