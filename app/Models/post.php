<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with=['category', 'author'];//this prevents the N+1 problem

    protected $guarded = [];//this prevents specified fields to be updated
    // protected $fillable = ['title','excerpt','body']; //this defines which fields can be modified by a user 

    public function category()
    {
        return $this->belongsTo(Category::class);


    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
}


    
