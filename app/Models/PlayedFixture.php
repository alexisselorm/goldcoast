<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayedFixture extends Model
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
