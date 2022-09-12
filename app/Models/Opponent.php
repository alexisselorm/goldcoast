<?php

namespace App\Models;

use App\Models\Fixture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opponent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fixture(){
        return $this->hasMany(Fixture::class);
    }

}
