<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reaction extends Model
{
    protected $fillable = ['user_id', 'post_id', 'content'];
    protected $hidden = ['user_id'];
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
