<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory; 
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'src', 'description', 'alt', 'title',
    ];
}
