<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramSubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(ProgramCategory::class);
    }
    public function program(){
        return $this->hasMany(Academic::class,'subcategory_id');
    }
}
