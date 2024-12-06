<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['type','category_name','status'];

    public function subcategories(){
        return $this->hasMany(Category::class, 'type');
    }
    public function governance(){
        return $this->hasMany(Governance::class);
    }
}
