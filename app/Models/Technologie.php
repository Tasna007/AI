<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
    use HasFactory;
    protected $table = 'technologie';
    protected $fillable = [
        'id',
        'nom',
        'description',
    ];
    public $timestamps = false;
    
}
