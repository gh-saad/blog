<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $with = ['category','author'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'post_cat_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'post_author_id', 'id');
    }
}
