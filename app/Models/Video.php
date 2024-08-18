<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //protected $primarykey = 'Video_id';

    protected $fillable=['Title','Video_Url','Like','Course_id'];
    

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function Course(){
        return $this->belongsTo(Course::class);
    }
}
