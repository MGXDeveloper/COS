<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //protected $primarykey = 'Course_id';
    protected $fillable=['Name','Image','Teacher','Hours'];

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function Students(){
        return $this->belongsToMany(Student::class,'students_courses');
    }
}
