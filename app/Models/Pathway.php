<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pathway extends Model
{
    /** @use HasFactory<\Database\Factories\PathwayFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'created_by',
        'updated_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function updater()
    {
        $this->belongsTo(User::class);
    }
}
