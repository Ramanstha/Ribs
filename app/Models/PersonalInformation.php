<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function Parent(){
        return $this->hasOne(ParentInformation::class,'personalinformation_id');
    }

    public function EmergencyContact(){
        return $this->hasOne(EmergencyContact::class,'personalinformation_id');
    }

    public function AcademicInformation(){
        return $this->hasOne(AcademicInformation::class,'personalinformation_id');
    }
}
