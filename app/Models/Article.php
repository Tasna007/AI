<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable = [
        'id',
        'idadmin',
        'idcategorie',
        'idtechnologie',
        'nom',
        'description',
        'photo',
    ];
    public $timestamps = false;
    public function categorie(){
        return $this->belongsTo(Categorie::class, "idcategorie");
    }
    public function technologie(){
        return $this->belongsTo(Technologie::class, "idtechnologie");
    }
    
}
