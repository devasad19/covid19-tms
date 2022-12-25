<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNid extends Model
{
    use HasFactory;


    protected $fillable = ['nid','user_id', 'dob', 'pid', 'type', 'status'];

}
