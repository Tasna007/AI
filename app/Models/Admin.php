<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = [
        'id',
        'email',
        'password',
    ];
    public $timestamps = false;
    public static function login($email,$password){
        $result = Admin::fromQuery("SELECT * FROM Admin WHERE email = ? AND password = ? limit 1",[$email,md5($password)]);
        if (count($result) == 0) {

            return null;
        }
        return $result[0];
    }
    
}
