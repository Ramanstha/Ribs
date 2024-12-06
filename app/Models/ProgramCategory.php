<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subcategory(){
        return $this->hasMany(ProgramCategory::class,'category_id');
    }
    public function category(){
        return $this->hasMany(ProgramSubCategory::class,'category_id');
    }
    // public function academic(){
    //     return $this->hasMany(Academic::class,'category_id');
    // }
}
