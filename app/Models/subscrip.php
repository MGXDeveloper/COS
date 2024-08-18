<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscrip extends Model
{
    use HasFactory;

    protected $fillable=['User_id','Course_id'];
}
