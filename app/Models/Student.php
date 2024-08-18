<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //protected $primarykey = 'Student_id';

    protected $fillable=['Fname','Lname','Age','Gender','Email','Password'];

    public function Courses(){
        return $this->belongsToMany(Course::class,'students_courses');
    }
}
