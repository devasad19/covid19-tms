<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportTrack extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'status', 'staff_id','remark'];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
