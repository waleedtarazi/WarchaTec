<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'age',
        'gender'];

    public function Courses(){
        return $this->belongsToMany(Course::class,'students_course','student_id','course_id');
    }


}
