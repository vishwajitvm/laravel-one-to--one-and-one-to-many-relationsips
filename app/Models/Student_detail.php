<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'alter_phone',
        'course',
        'roll_no',
    ];

}
