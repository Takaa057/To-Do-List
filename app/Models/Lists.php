<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;

    protected $table = 'list_data';

    protected $fillable = [
        'nama',
        'status',
        'prioritas',
        'tanggal'
    ];
}
