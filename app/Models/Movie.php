<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'title',
        'body',
        'category',
        'authorname',
        'user_id'
    ];

    // One to One, un movie ha un utente:
    public function user(){
        return $this->belongsTo(User::class);  
    }  
}
