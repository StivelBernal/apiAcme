<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        "owner_id",
        "driver_id",
        "placa",
        "color",
        "type"
    ];

    public function owner(){
		return $this->belongsTo(Person::class, 'owner_id');
	}

    public function driver(){
		return $this->belongsTo(Person::class, 'driver_id');
	}
}
