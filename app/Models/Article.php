<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'slug', 'picture', 'content'
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
