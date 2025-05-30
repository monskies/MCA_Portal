<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentId extends Model
{
    use HasFactory;

    protected $table = 'student_id';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = ['student_number'];
}
