<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fixture()
    {
        return $this->hasMany(Fixture::class);
    }
}
