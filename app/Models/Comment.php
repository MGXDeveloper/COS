<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //protected $primarykey = 'Comment_id';

    protected $fillable=['Body','Like','Video_id','User_id'];
}
