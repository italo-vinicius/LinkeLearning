<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table = 'post_links';

    protected $fillable = [
        'post_id',
        'link'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
