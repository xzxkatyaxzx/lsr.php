<?php

namespace App\Models;

use App\Http\Controllers\Comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'img'];

    public function comment()
    {
        return $this->hasMany('App\Models\Comments', 'new_id', 'id');
    }
}
