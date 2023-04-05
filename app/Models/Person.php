<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = "persons";
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "phone",
        "document_number",
        "address",
        "city",
        "type"
    ];

}

