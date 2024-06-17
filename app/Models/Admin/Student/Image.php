<?php

namespace App\Models\Admin\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'student_images';
    protected $fillable = ['source', 'student_id'];
    public $timestamps = false;
}
