<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function subcategory(){
    //     return $this->hasMany(AboutCategory::class);
    // }
    public function about(){
        return $this->hasMany(Aboutus::class,'category_id');
    }
}
