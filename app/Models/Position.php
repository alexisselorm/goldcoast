<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
