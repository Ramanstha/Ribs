<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpersonalInformation extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function Parent(){
        return $this->hasOne(SparentInformation::class,'Spersonalinformation_id');
    }

    public function Seducation(){
        return $this->hasOne(Seducation::class,'Spersonalinformation_id');
    }

    public function Seca(){
        return $this->hasOne(Seca::class,'Spersonalinformation_id');
    }

    public function Sterminal(){
        return $this->hasOne(Sterminal::class,'Spersonalinformation_id');
    }
}
