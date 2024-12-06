<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function category(){
        return $this->belongsTo(ProgramCategory::class);
    }
    public function subcategory(){
        return $this->belongsTo(ProgramSubCategory::class);
    }
}
