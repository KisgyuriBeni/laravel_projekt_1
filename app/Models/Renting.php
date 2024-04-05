<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renting extends Model
{
    use HasFactory;

    protected $fillable =[
        "writer", "type", "title", "renter_id"
    ];
    public function renter()
    {
        return $this->belongsTo(Renter::class);
    }
}
