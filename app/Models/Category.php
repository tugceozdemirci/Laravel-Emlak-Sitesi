<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends = [
        'parent',

    ];

    #one to Many
    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    #one to Many Inverse
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    #one to Many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }


}
