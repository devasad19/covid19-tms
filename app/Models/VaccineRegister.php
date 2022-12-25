<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class VaccineRegister extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'mothers_name', 'fathers_name', 'phone', 'division', 'address', 'status'];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }



    public function vaccineRegister(){
        return $this->hasOne(PatientAssign::class, 'vaccine_register_id');
    }



}
