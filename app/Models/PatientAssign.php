<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAssign extends Model
{
    use HasFactory;


    protected $fillable = ['vaccine_register_id','user_id', 'step', 'report_file','report','type', 'status'];



    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function vaccineRegister(){
        return $this->belongsTo(VaccineRegister::class, 'vaccine_register_id');
    }


}
