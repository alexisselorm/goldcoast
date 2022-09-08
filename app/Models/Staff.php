<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function countr()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
