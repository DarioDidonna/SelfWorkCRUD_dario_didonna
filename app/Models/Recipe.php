<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'description', 'preparation_time', 'img', 'category', 'difficulty', 'user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
