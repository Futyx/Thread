<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
     
    protected $guarded =['id'];

    public function participant(){

        return $this->hasOne(User::class);
    }

    public function message(){

        return $this->through(User::class)->has(Message::class);
    }

    public function reaction(){

        return $this->through(MessageReaction::class)->has(Reaction::class);
    }

}
