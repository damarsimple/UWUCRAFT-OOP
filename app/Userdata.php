<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Userdata extends Model
{
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
