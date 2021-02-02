<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    #One to many(inverse) / Belongs to
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
