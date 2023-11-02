<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class port_project extends Model
{
    use HasFactory;
    protected $fillable = [
        'port_images','detail','kategori'
    ];
}
