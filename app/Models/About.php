<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    use HasFactory;
    protected $table = 'abouts';
    protected $primaryKey = 'id';

      
    
        protected $fillable = ['title', 'description', 'image', 'button_text', 'button_link'];
    
}
