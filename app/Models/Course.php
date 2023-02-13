<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'students_count'
        ];
    protected $hidden = [
        ];

    public function Student(){
        return $this->belongsToMany(Student::class,'students_course','course_id','student_id');
    }

}
