<?php

namespace App\Models;

use App\Models\Opponent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fixture extends Model
{
    use HasFactory;

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function opponent()
    {
        return $this->belongsTo(Opponent::class);
    }


    protected $guarded = ['id'];
}
