<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'start_date',
        'end_date'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        "updated_at",
        "created_at"
    ];
}
