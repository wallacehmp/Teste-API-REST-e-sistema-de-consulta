<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $hidden = ['password'];
    protected $fillable = ['id','usuario','senha'];

    public function getUser($name){
        $user = new User();
        $userTeste = self::all();
        foreach ($userTeste as $key => $value) {
            if($value->email == $name){
                return $value;
            }
        }
        return false;       
    }    
}