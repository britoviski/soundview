<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;



class Comentario extends Model
{
    protected $table = 'comentarios';

    public function autor(): HasOne
    {
        //return $this->hasOne(Categoria::class);
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
